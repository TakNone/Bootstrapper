# botInlineMessageMediaContact

**Description** : *Send a contact*

**Layer** : 218

```tl
botInlineMessageMediaContact#18d1cdc2 flags:# phone_number:string first_name:string last_name:string vcard:string reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number |
| <mark>first_name</mark> | [`string`](type/string) | First name |
| <mark>last_name</mark> | [`string`](type/string) | Last name |
| <mark>vcard</mark> | [`string`](type/string) | VCard info |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[BotInlineMessage](type/BotInlineMessage)

---

## Example

```php
$botInlineMessage = $client->botInlineMessageMediaContact(
	phone_number : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
	vcard : 'ZsLPxp7Tweuh5X1t',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```