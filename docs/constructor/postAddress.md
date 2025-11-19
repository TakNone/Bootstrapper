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
	street_line1 : 'cRsxHaYS1mwP9f0n',
	street_line2 : 'Q37T6ViIFMnwZ58H',
	city : 'e1uKfAZFMXrSBU5Y',
	state : 'T7O98rxIUNjV0M6G',
	country_iso2 : 'cVt9sWC1FfIyour7',
	post_code : 'NKsbZ1H2SAc5CklV',
);
```