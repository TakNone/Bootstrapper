# postAddress

**Description** : *Shipping address*

**Layer** : 225

```tl
postAddress#1e8caaeb street_line1:string street_line2:string city:string state:string country_iso2:string post_code:string = PostAddress;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>street_line1</mark> | [`string`](type/string) | First line for the address |
| <mark>street_line2</mark> | [`string`](type/string) | Second line for the address |
| <mark>city</mark> | [`string`](type/string) | City |
| <mark>state</mark> | [`string`](type/string) | State, if applicable (empty otherwise) |
| <mark>country_iso2</mark> | [`string`](type/string) | ISO 3166-1 alpha-2 country code |
| <mark>post_code</mark> | [`string`](type/string) | Address post code |

---

## Type

[PostAddress](type/PostAddress)

---

## Example

```php
$postAddress = $client->postAddress(
	street_line1 : 'MBJ0GbpIt17TRPwS',
	street_line2 : 'QiUs5N4DhpJYLFvb',
	city : 'eCn4zSLhmtg5pXKi',
	state : '6Hq23F5fl0rXL8JU',
	country_iso2 : 'OD3a4vdRlyIAGiBf',
	post_code : 'nCVraz3d6M9B2WUL',
);
```