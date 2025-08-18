# account.editBusinessChatLink

**Description** : *Edit a created business chat deep link &raquo;*

**Layer** : 211

```tl
account.editBusinessChatLink#8c3410af slug:string link:InputBusinessChatLink = BusinessChatLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | Slug of the link, obtained as specified here » |
| <mark>link</mark> | [`InputBusinessChatLink`](type/InputBusinessChatLink) | New link information |

---

## Result

[BusinessChatLink](type/BusinessChatLink)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHATLINK_SLUG_EMPTY** | `400` | The specified slug is empty |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |

---

## Example

```php
$businessChatLink = $client->account->editBusinessChatLink(
	slug : 'ehWnY12zo3gtx0Ew',
	link : $client->inputBusinessChatLink(
		message : 'EHo5p84PbGnZvfJg',
		entities : array(
			$client->messageEntityUnknown(
				offset : 65,
				length : 41,
			),
			$client->messageEntityMention(
				offset : 34,
				length : 46,
			),
			$client->messageEntityHashtag(
				offset : 75,
				length : 91,
			),
			$client->messageEntityBotCommand(
				offset : 70,
				length : 18,
			),
			$client->messageEntityUrl(
				offset : 32,
				length : 79,
			),
			$client->messageEntityEmail(
				offset : 79,
				length : 19,
			),
			$client->messageEntityBold(
				offset : 90,
				length : 99,
			),
			$client->messageEntityItalic(
				offset : 15,
				length : 100,
			),
			$client->messageEntityCode(
				offset : 25,
				length : 74,
			),
			$client->messageEntityPre(
				offset : 5,
				length : 13,
				language : 'sVQNWuiaeHfbOlZ0',
			),
			$client->messageEntityTextUrl(
				offset : 24,
				length : 75,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 87,
				length : 69,
				user_id : 1307657813094925033,
			),
			$client->inputMessageEntityMentionName(
				offset : 37,
				length : 3,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 30,
				length : 33,
			),
			$client->messageEntityCashtag(
				offset : 56,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 20,
				length : 11,
			),
			$client->messageEntityStrike(
				offset : 68,
				length : 90,
			),
			$client->messageEntityBankCard(
				offset : 32,
				length : 76,
			),
			$client->messageEntitySpoiler(
				offset : 54,
				length : 58,
			),
			$client->messageEntityCustomEmoji(
				offset : 6,
				length : 63,
				document_id : 8306655415561630669,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 45,
				length : 42,
			),
		),
		title : 'zpSCXNfxU2shoTZG',
	),
);
```