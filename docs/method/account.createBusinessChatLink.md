# account.createBusinessChatLink

**Description** : *Create a business chat deep link &raquo;*

**Layer** : 233

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
| **DOCUMENT_INVALID** | `400` | The specified document is invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |

---

## Example

```php
$businessChatLink = $client->account->createBusinessChatLink(
	link : $client->inputBusinessChatLink(
		message : 'H0IAJ93tBj1xT4Kf',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 24,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 65,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 35,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 30,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 52,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 85,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 59,
				language : 'rVCYM4gwKpts7eqf',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 37,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 72,
				user_id : 3873941530219799966,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 7,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 70,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 19,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 91,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 51,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 84,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 50,
				document_id : 7753525388292559214,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 75,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 41,
				date : 43,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 53,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 72,
				old_text : 'w6KxqId4y7TRlWzB',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 91,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 58,
			),
		),
		title : 'ARMT5DQB4NgwxdCq',
	),
);
```