# messages.editFactCheck

**Description** : *Edit/create a fact\-check on a message*

**Layer** : 211

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
	msg_id : 12,
	text : $client->textWithEntities(
		text : 'XDkCSyQAZUY8E5oj',
		entities : array(
			$client->messageEntityUnknown(
				offset : 84,
				length : 95,
			),
			$client->messageEntityMention(
				offset : 41,
				length : 12,
			),
			$client->messageEntityHashtag(
				offset : 68,
				length : 91,
			),
			$client->messageEntityBotCommand(
				offset : 69,
				length : 37,
			),
			$client->messageEntityUrl(
				offset : 50,
				length : 17,
			),
			$client->messageEntityEmail(
				offset : 64,
				length : 65,
			),
			$client->messageEntityBold(
				offset : 97,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 53,
				length : 16,
			),
			$client->messageEntityCode(
				offset : 5,
				length : 69,
			),
			$client->messageEntityPre(
				offset : 66,
				length : 34,
				language : 'opKf2X96I5umih3t',
			),
			$client->messageEntityTextUrl(
				offset : 24,
				length : 28,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 66,
				length : 70,
				user_id : -4904720609278198781,
			),
			$client->inputMessageEntityMentionName(
				offset : 66,
				length : 34,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 71,
				length : 29,
			),
			$client->messageEntityCashtag(
				offset : 21,
				length : 6,
			),
			$client->messageEntityUnderline(
				offset : 64,
				length : 6,
			),
			$client->messageEntityStrike(
				offset : 86,
				length : 45,
			),
			$client->messageEntityBankCard(
				offset : 85,
				length : 26,
			),
			$client->messageEntitySpoiler(
				offset : 34,
				length : 84,
			),
			$client->messageEntityCustomEmoji(
				offset : 45,
				length : 42,
				document_id : -5250306661425240735,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 61,
				length : 25,
			),
		),
	),
);
```