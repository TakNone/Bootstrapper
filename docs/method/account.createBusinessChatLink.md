# account.createBusinessChatLink

**Description** : *Create a business chat deep link &raquo;*

**Layer** : 227

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
		message : 'BxuQaAtXnZe0fHqW',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 2,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 21,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 21,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 1,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 20,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 59,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 29,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 18,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 68,
				language : 'FBrL6xm4cTQKvYXU',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 88,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 45,
				user_id : -6586107043596207899,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 62,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 36,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 20,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 1,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 56,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 93,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 44,
				document_id : 5943758790366545980,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 32,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 93,
				date : 24,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 28,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 6,
				old_text : '2nJM65Xs13y4dxwU',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 29,
			),
		),
		title : 'KCNzDH5OoFkfiB1m',
	),
);
```