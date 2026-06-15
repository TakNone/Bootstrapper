# account.editBusinessChatLink

**Description** : *Edit a created business chat deep link &raquo;*

**Layer** : 227

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
	slug : 'dYE18XHqyMPiJrAb',
	link : $client->inputBusinessChatLink(
		message : 'S7VBJTIXynFHNbq2',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 90,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 64,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 11,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 42,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 11,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 68,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 99,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 79,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 61,
				language : 'qfw9uP8a4kAWzKc3',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 60,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 75,
				user_id : 3162916807185088547,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 94,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 32,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 38,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 42,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 4,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 71,
				document_id : 2042166573600221969,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 55,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 100,
				date : 80,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 25,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 51,
				old_text : 'fTHYbIROputmEasx',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 72,
			),
		),
		title : 'aHr02IZFJ7XnUK6e',
	),
);
```