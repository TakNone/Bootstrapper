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
		message : 'RmrkgxsoO8cX7p9f',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 24,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 20,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 95,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 56,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 10,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 93,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 16,
				language : 'XhCE1n5RYOa9umMU',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 56,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 100,
				user_id : 7932468957068928140,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 89,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 34,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 93,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 39,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 75,
				document_id : -450563710400901535,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 79,
			),
		),
		title : 'zu85KPQ2vMJnhRCg',
	),
);
```