# account.createBusinessChatLink

**Description** : *Create a business chat deep link &raquo;*

**Layer** : 229

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
		message : 'VBjIiEuXLSTcnkYZ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 94,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 45,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 26,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 70,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 9,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 87,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 17,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 70,
				language : 'C3GBsceJwA25MUha',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 34,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 7,
				user_id : 4583211427201565271,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 92,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 71,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 12,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 68,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 56,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 88,
				document_id : -2120072526590288596,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 17,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 34,
				date : 31,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 33,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 70,
				old_text : 'zqlEr6NjOk4RoCmx',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 84,
			),
		),
		title : 'MEXD7cIOGZxRmP50',
	),
);
```