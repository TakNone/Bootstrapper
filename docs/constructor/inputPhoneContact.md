# inputPhoneContact

**Description** : *Phone contact*

**Layer** : 216

```tl
inputPhoneContact#f392b7f4 client_id:long phone:string first_name:string last_name:string = InputContact;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>client_id</mark> | [`long`](type/long) | An arbitrary 64-bit integer: it should be set, for example, to an incremental number when using contacts.importContacts, in order to retry importing only the contacts that weren't imported successfully, according to the client_ids returned in contacts.importedContacts.retry_contacts |
| <mark>phone</mark> | [`string`](type/string) | Phone number |
| <mark>first_name</mark> | [`string`](type/string) | Contact's first name |
| <mark>last_name</mark> | [`string`](type/string) | Contact's last name |

---

## Type

[InputContact](type/InputContact)

---

## Example

```php
$inputContact = $client->inputPhoneContact(
	client_id : 3854504567051712005,
	phone : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
);
```