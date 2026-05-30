# account.editBusinessChatLink

**Description** : *Edit a created business chat deep link &raquo;*

**Layer** : 225

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
	slug : 'lgCGqiPV5IEwpjOY',
	link : $client->inputBusinessChatLink(
		message : '4QFE0sf5LdeaAhwk',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 57,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 56,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 65,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 41,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 100,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 94,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 33,
				language : 'Svz574In0QXpjwke',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 36,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 5,
				user_id : -3849748587423123516,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 78,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 65,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 70,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 3,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 40,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 56,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 8,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 100,
				document_id : -3266752024076214189,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 26,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 67,
				date : 53,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 99,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 43,
				old_text : 'p0NhtPkiqCRLxoD7',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 15,
			),
		),
		title : 'BPRucrdO6nzjFyS1',
	),
);
```