# account.createBusinessChatLink

**Description** : *Create a business chat deep link &raquo;*

**Layer** : 222

```tl
account.createBusinessChatLink#8851e68e link:InputBusinessChatLink = BusinessChatLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>link</mark> | [`InputBusinessChatLink`](type/InputBusinessChatLink) | Info about the link to create |

---

## Result

[BusinessChatLink](type/BusinessChatLink)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHATLINKS_TOO_MUCH** | `400` | Too many business chat links were created, please delete some older links |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |

---

## Example

```php
$businessChatLink = $client->account->createBusinessChatLink(
	link : $client->inputBusinessChatLink(
		message : '9D0G7P64Kfl8CTWF',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 33,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 58,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 51,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 62,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 8,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 64,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 94,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 12,
				language : '0CNrSLMqFRsVdywT',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 9,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 40,
				user_id : -2488622584228965179,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 28,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 35,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 89,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 28,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 58,
				document_id : 2604061228914238617,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 94,
			),
		),
		title : 'yXfubKQaq6N2hksF',
	),
);
```