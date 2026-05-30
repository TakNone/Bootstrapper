# account.createBusinessChatLink

**Description** : *Create a business chat deep link &raquo;*

**Layer** : 225

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
		message : 'gsJHkOCZ5qTmUV2u',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 43,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 86,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 66,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 42,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 14,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 47,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 64,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 75,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 63,
				language : 'vd39OXsgCeVPjJiZ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 70,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 34,
				user_id : 5512642697170106441,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 76,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 29,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 36,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 98,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 87,
				document_id : -6575526696461920986,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 9,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 51,
				date : 33,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 82,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 57,
				old_text : 'FLEo9USQN456GYgJ',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 46,
			),
		),
		title : 'CxiI6KBpuDnA4TRP',
	),
);
```