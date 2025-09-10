# savedPhoneContact

**Description** : *Saved contact*

**Layer** : 214

```tl
savedPhoneContact#1142bd56 phone:string first_name:string last_name:string date:int = SavedContact;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone</mark> | [`string`](type/string) | Phone number |
| <mark>first_name</mark> | [`string`](type/string) | First name |
| <mark>last_name</mark> | [`string`](type/string) | Last name |
| <mark>date</mark> | [`int`](type/int) | Date added |

---

## Type

[SavedContact](type/SavedContact)

---

## Example

```php
$savedContact = $client->savedPhoneContact(
	phone : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
	date : 72,
);
```