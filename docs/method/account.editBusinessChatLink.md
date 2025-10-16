# account.editBusinessChatLink

**Description** : *Edit a created business chat deep link &raquo;*

**Layer** : 216

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
	slug : '9eCU51GhbAQ4oEHd',
	link : $client->inputBusinessChatLink(
		message : 'sY70VgJNXoUjDRhb',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 97,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 82,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 51,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 53,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 82,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 60,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 95,
				language : '6Wvm3gat07UNbknQ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 31,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : 1103407870870295368,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 45,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 53,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 96,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 81,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 9,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 87,
				document_id : -705302097853840594,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 33,
			),
		),
		title : 'G3QIeaDs5Xhqi2uf',
	),
);
```