# messages.editFactCheck

**Description** : *Edit/create a fact\-check on a message*

**Layer** : 216

```tl
messages.editFactCheck#589ee75 peer:InputPeer msg_id:int text:TextWithEntities = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the message was sent |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | Fact-check (maximum UTF-8 length specified in appConfig.factcheck_length_limit) |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ACTION_FORBIDDEN** | `403` | You cannot execute this action |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->editFactCheck(
	peer : $client->inputPeerEmpty(),
	msg_id : 81,
	text : $client->textWithEntities(
		text : 'HEDwGI7YohvTUisf',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 28,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 36,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 75,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 13,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 10,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 0,
				language : 'o7e1iY4RLOtbncq5',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 36,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : -3284168501259553095,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 33,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 0,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 74,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 1,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 60,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 55,
				document_id : -3441502326653676434,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 7,
			),
		),
	),
);
```