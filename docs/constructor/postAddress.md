# postAddress

**Description** : *Shipping address*

**Layer** : 218

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
	street_line1 : 'K3IrQSuxBjkOpVcP',
	street_line2 : 'yRHxvpAI3ecCugWO',
	city : 'YQgHXdRq3Vwly4Ct',
	state : 'LbUieI4WQSkmpZuG',
	country_iso2 : 'cQwE6KCVWl3JU97N',
	post_code : 'tQ6O5kxIi42NvUrP',
);
```