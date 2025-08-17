# contacts.addContact

**Description** : *Add an existing telegram user as contact*

**Layer** : 211

```tl
contacts.addContact#e8f463d0 flags:# add_phone_privacy_exception:flags.0?true id:InputUser first_name:string last_name:string phone:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **add_phone_privacy_exception** | [`flags.0?true`](type/true) | Allow the other user to see our phone number? |
| <mark>id</mark> | [`InputUser`](type/InputUser) | Telegram ID of the other user |
| <mark>first_name</mark> | [`string`](type/string) | First name |
| <mark>last_name</mark> | [`string`](type/string) | Last name |
| <mark>phone</mark> | [`string`](type/string) | User's phone number, may be omitted to simply add the user to the contact list, without a phone number |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CONTACT_ID_INVALID** | `400` | The provided contact ID is invalid |
| **CONTACT_NAME_EMPTY** | `400` | Contact name empty |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$updates = $client->contacts->addContact(
	add_phone_privacy_exception : true,
	id : $client->inputUserEmpty(),
	first_name : 'Tak',
	last_name : 'None',
	phone : '+1234567890',
);
```