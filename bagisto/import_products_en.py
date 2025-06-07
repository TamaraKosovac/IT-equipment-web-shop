import pandas as pd
import re

# Load your Excel file
df = pd.read_excel("import_33827.xls", sheet_name="Sheet1")

# Helper function to generate URL key
def generate_url_key(name, sku):
    key = f"{name}-{sku}".lower()
    key = re.sub(r'[^a-z0-9]+', '-', key).strip('-')
    return key

# Combine categories and images
df['categories'] = df[['Kategorija1', 'Kategorija2']].fillna('').agg('/'.join, axis=1).str.strip('/')
image_columns = [col for col in df.columns if col.startswith('Slika')]
df['images'] = df[image_columns].fillna('').agg(','.join, axis=1).str.strip(',')

# Construct Bagisto import format
bagisto_df = pd.DataFrame({
    'sku': df['Šifra'],
    'parent_sku': '',
    'locale': 'en',
    'attribute_family_code': 'default',
    'type': 'simple',
    'categories': df['categories'],
    'images': df['images'],
    'name': df['Naziv'],
    'description': df['Opis'].apply(lambda x: x if pd.notnull(x) and str(x).strip() != '' else 'Opis nije dostupan'),
    'short_description': df['Opis'].apply(lambda x: x if pd.notnull(x) and str(x).strip() != '' else 'Opis nije dostupan'),
    'status': 1,
    'visible_individually': 1,
    'new': 1,
    'featured': 1,
    'guest_checkout': 1,
    'length': '',
    'width': '',
    'height': '',
    'weight': 1,
    'tax_category_name': df['Porez'],
    'price': df['Preporučena cijena'],
    'cost': df['Nabavna cijena'],
    'special_price': '',
    'special_price_from': '',
    'special_price_to': '',
    'customer_group_prices': '',
    'url_key': df.apply(lambda x: generate_url_key(x['Naziv'], x['Šifra']), axis=1),
    'meta_title': df['Naziv'],
    'meta_keywords': '',
    'meta_description': df['Opis'].str[:150],
    'manage_stock': 1,
    'inventories': 'default=100',
    'related_skus': '',
    'cross_sell_skus': '',
    'up_sell_skus': '',
    'configurable_variants': '',
    'bundle_options': '',
    'associated_skus': ''
})

# Export to CSV
bagisto_df.to_csv("bagisto_products.csv", index=False)
