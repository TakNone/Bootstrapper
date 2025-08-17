# account.editBusinessChatLink

**Description** : *Edit a created business chat deep link »*

**Layer** : 211

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
	slug : 'f7hF5V4GEDIMwLTB',
	link : $client->inputBusinessChatLink(
		message : 'ctKefDq1vul7hS3Q',
		entities : array(
			$client->messageEntityUnknown(
				offset : 87,
				length : 100,
			),
			$client->messageEntityMention(
				offset : 74,
				length : 29,
			),
			$client->messageEntityHashtag(
				offset : 24,
				length : 57,
			),
			$client->messageEntityBotCommand(
				offset : 67,
				length : 21,
			),
			$client->messageEntityUrl(
				offset : 59,
				length : 20,
			),
			$client->messageEntityEmail(
				offset : 97,
				length : 67,
			),
			$client->messageEntityBold(
				offset : 13,
				length : 6,
			),
			$client->messageEntityItalic(
				offset : 95,
				length : 29,
			),
			$client->messageEntityCode(
				offset : 93,
				length : 86,
			),
			$client->messageEntityPre(
				offset : 93,
				length : 30,
				language : 'yPVCRnb5DNOkHevU',
			),
			$client->messageEntityTextUrl(
				offset : 31,
				length : 50,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 10,
				length : 38,
				user_id : 5412053595465590728,
			),
			$client->inputMessageEntityMentionName(
				offset : 80,
				length : 0,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 45,
				length : 25,
			),
			$client->messageEntityCashtag(
				offset : 69,
				length : 37,
			),
			$client->messageEntityUnderline(
				offset : 1,
				length : 83,
			),
			$client->messageEntityStrike(
				offset : 84,
				length : 29,
			),
			$client->messageEntityBankCard(
				offset : 83,
				length : 48,
			),
			$client->messageEntitySpoiler(
				offset : 74,
				length : 59,
			),
			$client->messageEntityCustomEmoji(
				offset : 42,
				length : 13,
				document_id : 2292784174401680682,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 88,
				length : 4,
			),
		),
		title : '1B4pehri6OoJbXD8',
	),
);
```