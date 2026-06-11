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
	slug : 'SYTncm21zlhpf70Q',
	link : $client->inputBusinessChatLink(
		message : 'ao7HWwbZX2kmhAlU',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 71,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 38,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 33,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 4,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 74,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 20,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 29,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 59,
				language : 'kXFoSJAwyZmRrOne',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 85,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 64,
				user_id : -5653060824082729370,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 22,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 42,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 16,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 53,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 82,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 86,
				document_id : 3940070874336565920,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 82,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 46,
				date : 87,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 17,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 23,
				old_text : 'xjfnzsOwT3d0o1Vr',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 56,
			),
		),
		title : 'xFfnuL6ARsTEVPDm',
	),
);
```