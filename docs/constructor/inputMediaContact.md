# inputMediaContact

**Description** : *Phone book contact*

**Layer** : 214

```tl
inputMediaContact#f8ab7dfb phone_number:string first_name:string last_name:string vcard:string = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number |
| <mark>first_name</mark> | [`string`](type/string) | Contact's first name |
| <mark>last_name</mark> | [`string`](type/string) | Contact's last name |
| <mark>vcard</mark> | [`string`](type/string) | Contact vcard |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaContact(
	phone_number : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
	vcard : '0lYhfjQ5x8Pvyu4g',
);
```