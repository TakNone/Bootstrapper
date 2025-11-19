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
		message : 'a0GrBYw9RuXMbC87',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 85,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 25,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 7,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 72,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 99,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 6,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 39,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 13,
				language : 'MLrpKa5kC8GDl1ST',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 98,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 55,
				user_id : -4782675415757174496,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 44,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 75,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 4,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 75,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 44,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 14,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 10,
				document_id : -271740481600853885,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 38,
			),
		),
		title : '0UNc7n3tmWg2OdPR',
	),
);
```