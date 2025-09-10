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
	slug : '1zP6ZfyhDwgN04Tn',
	link : $client->inputBusinessChatLink(
		message : 'SNg3rl4IUaHPb0ZD',
		entities : array(
			$client->messageEntityUnknown(
				offset : 88,
				length : 17,
			),
			$client->messageEntityMention(
				offset : 92,
				length : 86,
			),
			$client->messageEntityHashtag(
				offset : 30,
				length : 52,
			),
			$client->messageEntityBotCommand(
				offset : 78,
				length : 7,
			),
			$client->messageEntityUrl(
				offset : 48,
				length : 64,
			),
			$client->messageEntityEmail(
				offset : 45,
				length : 71,
			),
			$client->messageEntityBold(
				offset : 7,
				length : 34,
			),
			$client->messageEntityItalic(
				offset : 87,
				length : 13,
			),
			$client->messageEntityCode(
				offset : 51,
				length : 53,
			),
			$client->messageEntityPre(
				offset : 36,
				length : 67,
				language : 'MNfGUckLJpTn74CY',
			),
			$client->messageEntityTextUrl(
				offset : 27,
				length : 39,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 38,
				length : 33,
				user_id : -6716916165112021996,
			),
			$client->inputMessageEntityMentionName(
				offset : 39,
				length : 87,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 18,
				length : 5,
			),
			$client->messageEntityCashtag(
				offset : 67,
				length : 28,
			),
			$client->messageEntityUnderline(
				offset : 44,
				length : 20,
			),
			$client->messageEntityStrike(
				offset : 55,
				length : 83,
			),
			$client->messageEntityBankCard(
				offset : 50,
				length : 77,
			),
			$client->messageEntitySpoiler(
				offset : 96,
				length : 83,
			),
			$client->messageEntityCustomEmoji(
				offset : 62,
				length : 85,
				document_id : 3923175010015602681,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 17,
				length : 71,
			),
		),
		title : 'hYmLW9TxpJ2vk7zD',
	),
);
```