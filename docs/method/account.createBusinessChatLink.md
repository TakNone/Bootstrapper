# account.createBusinessChatLink

**Description** : *Create a business chat deep link &raquo;*

**Layer** : 218

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
		message : 'q2m7AV5TPrbwRXpC',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 34,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 28,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 100,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 64,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 15,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 79,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 42,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 82,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 37,
				language : '1BfYlnExj0hZkyNb',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 20,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : 4059323698444144923,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 36,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 81,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 44,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 11,
				document_id : -1027682067970603307,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 27,
			),
		),
		title : 'fR7QEmynAejt0H8w',
	),
);
```