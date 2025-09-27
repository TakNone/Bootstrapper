# help.inviteText

**Description** : *Text of a text message with an invitation to install Telegram*

**Layer** : 214

```tl
help.inviteText#18cb9f78 message:string = help.InviteText;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`string`](type/string) | Text of the message |

---

## Type

[help.InviteText](type/help.InviteText)

---

## Example

```php
$helpInviteText = $client->help->inviteText(
	message : 'VlRu3FAO0YaIz2hU',
);
```