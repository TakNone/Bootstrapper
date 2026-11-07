# account.editBusinessChatLink

**Description** : *Edit a created business chat deep link &raquo;*

**Layer** : 233

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
	slug : '0LA8D3i1qcxmgVXU',
	link : $client->inputBusinessChatLink(
		message : 'uD8M1V2ofGR4e9ST',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 72,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 79,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 7,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 83,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 96,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 74,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 19,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 25,
				language : 'UDbeCftm9pB1rQSX',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 70,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 36,
				user_id : -7712332031772979914,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 77,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 78,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 51,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 49,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 17,
				document_id : -3369305716736517227,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 93,
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
				date : 27,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 80,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 78,
				old_text : 'DF0jkH2qc4hGBQLT',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 10,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 87,
			),
		),
		title : 'w5yYDTQAU8rXOlCd',
	),
);
```