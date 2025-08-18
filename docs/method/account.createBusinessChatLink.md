# account.createBusinessChatLink

**Description** : *Create a business chat deep link &raquo;*

**Layer** : 211

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
		message : 'oZkpKXbQPUEgOjcu',
		entities : array(
			$client->messageEntityUnknown(
				offset : 37,
				length : 59,
			),
			$client->messageEntityMention(
				offset : 86,
				length : 95,
			),
			$client->messageEntityHashtag(
				offset : 20,
				length : 9,
			),
			$client->messageEntityBotCommand(
				offset : 39,
				length : 3,
			),
			$client->messageEntityUrl(
				offset : 19,
				length : 64,
			),
			$client->messageEntityEmail(
				offset : 10,
				length : 85,
			),
			$client->messageEntityBold(
				offset : 73,
				length : 84,
			),
			$client->messageEntityItalic(
				offset : 49,
				length : 22,
			),
			$client->messageEntityCode(
				offset : 52,
				length : 11,
			),
			$client->messageEntityPre(
				offset : 14,
				length : 6,
				language : '8JWmIUcB7LXrC5j9',
			),
			$client->messageEntityTextUrl(
				offset : 87,
				length : 66,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 66,
				length : 86,
				user_id : 8197175048595762837,
			),
			$client->inputMessageEntityMentionName(
				offset : 66,
				length : 13,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 82,
				length : 99,
			),
			$client->messageEntityCashtag(
				offset : 3,
				length : 84,
			),
			$client->messageEntityUnderline(
				offset : 69,
				length : 64,
			),
			$client->messageEntityStrike(
				offset : 30,
				length : 99,
			),
			$client->messageEntityBankCard(
				offset : 20,
				length : 29,
			),
			$client->messageEntitySpoiler(
				offset : 43,
				length : 9,
			),
			$client->messageEntityCustomEmoji(
				offset : 50,
				length : 77,
				document_id : 1780530607629474705,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 29,
				length : 93,
			),
		),
		title : 'Sn2q0ZE7MrwsKYeD',
	),
);
```