# account.editBusinessChatLink

**Description** : *Edit a created business chat deep link &raquo;*

**Layer** : 222

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
	slug : 'FfpmYjn0hTD2BOPg',
	link : $client->inputBusinessChatLink(
		message : '6wHMFuqcpzCN2vRQ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 40,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 77,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 5,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 81,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 78,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 19,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 57,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 60,
				language : 'tYvTe4FHDpJqj2UO',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 23,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 52,
				user_id : 6141609210256542734,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 24,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 10,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 0,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 85,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 91,
				document_id : 4544376256481006485,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 55,
			),
		),
		title : 'QPHILqyOog5dG1Us',
	),
);
```