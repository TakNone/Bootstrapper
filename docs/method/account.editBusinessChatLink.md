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
	slug : 'lUAqc9JbPRTv6SfB',
	link : $client->inputBusinessChatLink(
		message : 'OyK9g41SYGtnBT0d',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 10,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 4,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 9,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 6,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 97,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 87,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 13,
				language : '6RbydYfa7BSjwJ35',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 54,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 16,
				user_id : 4094402360798648752,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 60,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 74,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 42,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 38,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 95,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 65,
				document_id : 2492168892591125333,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 19,
			),
		),
		title : '0NTF6jta3fkwR8K5',
	),
);
```