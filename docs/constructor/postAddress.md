# postAddress

**Description** : *Shipping address*

**Layer** : 227

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
	street_line1 : 'JxrTI5f4YlA1mC2Q',
	street_line2 : 'hCHJ4vSdyj9rQL85',
	city : 'EW1cSC3DXtyKFaBe',
	state : '0RSQc6b29ygdFBzv',
	country_iso2 : 'RIfx1gkldt4Vopes',
	post_code : 'p8hYIZLQ0UM9FScX',
);
```