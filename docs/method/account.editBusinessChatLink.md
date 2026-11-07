# account.editBusinessChatLink

**Description** : *Edit a created business chat deep link &raquo;*

**Layer** : 229

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
	slug : 'Ec9NGsftQkxL0l3O',
	link : $client->inputBusinessChatLink(
		message : 'KTdrZALg7FliwuB3',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 43,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 62,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 2,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 91,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 37,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 28,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 12,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 26,
				language : '6mC3i1aA87w4YrJG',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 97,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 36,
				user_id : -8758967488552746702,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 81,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 69,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 95,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 8,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 88,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 26,
				document_id : -4501951133302320604,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 23,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 55,
				date : 42,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 21,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 34,
				old_text : 'xl6kbBsWeZ3UoAcJ',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 27,
			),
		),
		title : 'aJbgvdzmI5suN48p',
	),
);
```