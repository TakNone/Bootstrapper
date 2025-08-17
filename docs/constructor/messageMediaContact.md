# messageMediaContact

**Description** : *Attached contact*

**Layer** : 211

```tl
messageMediaContact#70322949 phone_number:string first_name:string last_name:string vcard:string user_id:long = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number |
| <mark>first_name</mark> | [`string`](type/string) | Contact's first name |
| <mark>last_name</mark> | [`string`](type/string) | Contact's last name |
| <mark>vcard</mark> | [`string`](type/string) | VCARD of contact |
| <mark>user_id</mark> | [`long`](type/long) | User identifier or 0, if the user with the given phone number is not registered |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaContact(
	phone_number : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
	vcard : 'qrinXSbRhJkFEG1O',
	user_id : 8276799628412748502,
);
```