# account.editBusinessChatLink

**Description** : *Edit a created business chat deep link &raquo;*

**Layer** : 218

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
	slug : 'Xi0UmbLW7kpfcAqy',
	link : $client->inputBusinessChatLink(
		message : 'xFNlXwQpuEB7j6nU',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 44,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 16,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 11,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 5,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 92,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 91,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 45,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 58,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 81,
				language : 'jCwD5Fc4lpos6Kb8',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 62,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 45,
				user_id : -2782634112761281349,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 28,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 98,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 57,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 55,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 49,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 38,
				document_id : -8762395565812895864,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 49,
			),
		),
		title : 'xvtfK8X9pqUNPs4J',
	),
);
```