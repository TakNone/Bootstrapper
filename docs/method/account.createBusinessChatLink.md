# account.createBusinessChatLink

**Description** : *Create a business chat deep link &raquo;*

**Layer** : 214

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
		message : 'B75jUoGAsQKZkSw2',
		entities : array(
			$client->messageEntityUnknown(
				offset : 19,
				length : 51,
			),
			$client->messageEntityMention(
				offset : 100,
				length : 63,
			),
			$client->messageEntityHashtag(
				offset : 58,
				length : 95,
			),
			$client->messageEntityBotCommand(
				offset : 56,
				length : 20,
			),
			$client->messageEntityUrl(
				offset : 49,
				length : 82,
			),
			$client->messageEntityEmail(
				offset : 63,
				length : 5,
			),
			$client->messageEntityBold(
				offset : 14,
				length : 16,
			),
			$client->messageEntityItalic(
				offset : 97,
				length : 81,
			),
			$client->messageEntityCode(
				offset : 96,
				length : 6,
			),
			$client->messageEntityPre(
				offset : 76,
				length : 54,
				language : 'qtasLB5ljP7J4NVi',
			),
			$client->messageEntityTextUrl(
				offset : 92,
				length : 72,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 84,
				length : 44,
				user_id : 6515398867302862786,
			),
			$client->inputMessageEntityMentionName(
				offset : 6,
				length : 16,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 83,
				length : 99,
			),
			$client->messageEntityCashtag(
				offset : 9,
				length : 13,
			),
			$client->messageEntityUnderline(
				offset : 73,
				length : 11,
			),
			$client->messageEntityStrike(
				offset : 75,
				length : 12,
			),
			$client->messageEntityBankCard(
				offset : 38,
				length : 67,
			),
			$client->messageEntitySpoiler(
				offset : 29,
				length : 57,
			),
			$client->messageEntityCustomEmoji(
				offset : 96,
				length : 33,
				document_id : -5750824350508690785,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 66,
				length : 87,
			),
		),
		title : 'Y2PUmDG41gdTcewW',
	),
);
```