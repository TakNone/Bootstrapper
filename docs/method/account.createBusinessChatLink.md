# account.createBusinessChatLink

**Description** : *Create a business chat deep link »*

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
		message : 'rux9RaG0nhDslfQA',
		entities : array(
			$client->messageEntityUnknown(
				offset : 30,
				length : 37,
			),
			$client->messageEntityMention(
				offset : 68,
				length : 67,
			),
			$client->messageEntityHashtag(
				offset : 76,
				length : 46,
			),
			$client->messageEntityBotCommand(
				offset : 92,
				length : 75,
			),
			$client->messageEntityUrl(
				offset : 75,
				length : 40,
			),
			$client->messageEntityEmail(
				offset : 99,
				length : 19,
			),
			$client->messageEntityBold(
				offset : 95,
				length : 95,
			),
			$client->messageEntityItalic(
				offset : 81,
				length : 97,
			),
			$client->messageEntityCode(
				offset : 19,
				length : 89,
			),
			$client->messageEntityPre(
				offset : 97,
				length : 17,
				language : 'kqnLm8XZtj9f507O',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 17,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 79,
				length : 86,
				user_id : -601135552159467702,
			),
			$client->inputMessageEntityMentionName(
				offset : 92,
				length : 72,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 90,
				length : 57,
			),
			$client->messageEntityCashtag(
				offset : 49,
				length : 15,
			),
			$client->messageEntityUnderline(
				offset : 25,
				length : 93,
			),
			$client->messageEntityStrike(
				offset : 7,
				length : 42,
			),
			$client->messageEntityBankCard(
				offset : 26,
				length : 9,
			),
			$client->messageEntitySpoiler(
				offset : 36,
				length : 90,
			),
			$client->messageEntityCustomEmoji(
				offset : 32,
				length : 21,
				document_id : 6569425820618976919,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 40,
				length : 25,
			),
		),
		title : 'uIE9RycUtFs3odgf',
	),
);
```