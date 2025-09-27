# account.editBusinessChatLink

**Description** : *Edit a created business chat deep link &raquo;*

**Layer** : 214

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
	slug : 'W1e6O9KUiD5SVIdT',
	link : $client->inputBusinessChatLink(
		message : 'Sb5uWIxHn4hjvGtJ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 44,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 32,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 62,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 55,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 19,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 89,
				language : '0FDWdabNxHqczXmv',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 33,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 87,
				user_id : -4660877107208402437,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 86,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 22,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 89,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 45,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 93,
				document_id : 2484383614851426053,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 24,
			),
		),
		title : '4WHQvlFN8qicJejz',
	),
);
```