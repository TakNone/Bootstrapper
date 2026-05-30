# account.createBusinessChatLink

**Description** : *Create a business chat deep link &raquo;*

**Layer** : 222

```tl
account.createBusinessChatLink#8851e68e link:InputBusinessChatLink = BusinessChatLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>link</mark> | [`InputBusinessChatLink`](type/InputBusinessChatLink) | Info about the link to create |

---

## Result

[BusinessChatLink](type/BusinessChatLink)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHATLINKS_TOO_MUCH** | `400` | Too many business chat links were created, please delete some older links |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |

---

## Example

```php
$businessChatLink = $client->account->createBusinessChatLink(
	link : $client->inputBusinessChatLink(
		message : '1pEafdyh76k2NsWw',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 85,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 31,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 90,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 37,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 70,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 0,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 2,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 20,
				language : 'TUCZaVQAk8l0FzG7',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 31,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 50,
				user_id : 3790380029463232360,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 20,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 92,
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
				length : 46,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 70,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 52,
				document_id : 7143948800336945361,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 84,
			),
		),
		title : 'BhSNYgJe6wvG708a',
	),
);
```