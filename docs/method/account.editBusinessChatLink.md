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
	slug : 'E6BMiaIfykd0AcST',
	link : $client->inputBusinessChatLink(
		message : 'Rv4tMuT1O6ax70DV',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 32,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 32,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 16,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 28,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 28,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 7,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 42,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 18,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 43,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 60,
				language : 'nEUzKpl4GPsSHveL',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 36,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 20,
				user_id : 4265058467045565724,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 19,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 2,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 6,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 22,
				document_id : -5357752791436809852,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 16,
			),
		),
		title : 'qFb69Or1QMsw85SH',
	),
);
```