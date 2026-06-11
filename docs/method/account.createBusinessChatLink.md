# account.createBusinessChatLink

**Description** : *Create a business chat deep link &raquo;*

**Layer** : 227

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
		message : 'WCGRDinlfzL8QtwY',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 89,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 87,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 3,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 42,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 8,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 26,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 22,
				language : 'WkSYOfV5trChiu9l',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 56,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 80,
				user_id : 1661875013194484726,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 83,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 34,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 79,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 21,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 62,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 11,
				document_id : 7874098350901195330,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 90,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 70,
				date : 90,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 7,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 9,
				old_text : 'RnwEMklymDxsA8Uu',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 1,
			),
		),
		title : 'f6il8W0XQJFnPCGg',
	),
);
```