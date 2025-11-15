# dialogFilter

**Description** : *Dialog filter AKA folder*

**Layer** : 216

```tl
dialogFilter#aa472651 flags:# contacts:flags.0?true non_contacts:flags.1?true groups:flags.2?true broadcasts:flags.3?true bots:flags.4?true exclude_muted:flags.11?true exclude_read:flags.12?true exclude_archived:flags.13?true title_noanimate:flags.28?true id:int title:TextWithEntities emoticon:flags.25?string color:flags.27?int pinned_peers:Vector<InputPeer> include_peers:Vector<InputPeer> exclude_peers:Vector<InputPeer> = DialogFilter;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **contacts** | [`flags.0?true`](type/true) | Whether to include all contacts in this folder |
| **non_contacts** | [`flags.1?true`](type/true) | Whether to include all non-contacts in this folder |
| **groups** | [`flags.2?true`](type/true) | Whether to include all groups in this folder |
| **broadcasts** | [`flags.3?true`](type/true) | Whether to include all channels in this folder |
| **bots** | [`flags.4?true`](type/true) | Whether to include all bots in this folder |
| **exclude_muted** | [`flags.11?true`](type/true) | Whether to exclude muted chats from this folder |
| **exclude_read** | [`flags.12?true`](type/true) | Whether to exclude read chats from this folder |
| **exclude_archived** | [`flags.13?true`](type/true) | Whether to exclude archived chats from this folder |
| **title_noanimate** | [`flags.28?true`](type/true) | If set, any animated emojis present in title should not be animated and should be instead frozen on the first frame |
| <mark>id</mark> | [`int`](type/int) | Folder ID |
| <mark>title</mark> | [`TextWithEntities`](type/TextWithEntities) | Folder name (max 12 UTF-8 chars) |
| **emoticon** | [`flags.25?string`](type/string) | Emoji to use as icon for the folder |
| **color** | [`flags.27?int`](type/int) | A color ID for the folder tag associated to this folder, see here » for more info |
| <mark>pinned_peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | Pinned chats, folders can have unlimited pinned chats |
| <mark>include_peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | Include the following chats in this folder |
| <mark>exclude_peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | Exclude the following chats from this folder |

---

## Type

[DialogFilter](type/DialogFilter)

---

## Example

```php
$dialogFilter = $client->dialogFilter(
	contacts : true,
	non_contacts : true,
	groups : true,
	broadcasts : true,
	bots : true,
	exclude_muted : true,
	exclude_read : true,
	exclude_archived : true,
	title_noanimate : true,
	id : 35,
	title : $client->textWithEntities(
		text : 'jXhBPJZ4kdntfIRw',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 19,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 42,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 90,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 21,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 79,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 85,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 32,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 3,
				language : 'JHzOlogc9REYk2Z1',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 89,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 30,
				user_id : -3949995140234963503,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 41,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 6,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 40,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 24,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 62,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 7,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 88,
				document_id : 8102108975538729179,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 1,
			),
		),
	),
	emoticon : 'uaO0zofRcJkEU1sm',
	color : 82,
	pinned_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -2050626221614387988,
		),
		$client->inputPeerUser(
			user_id : 1722146936914816006,
			access_hash : 6271576295136027009,
		),
		$client->inputPeerChannel(
			channel_id : -4410235893038814095,
			access_hash : -210300617870048314,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 6,
			user_id : 2182292400615741585,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 15,
			channel_id : -6831188200756811624,
		),
	),
	include_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -6891634892930742862,
		),
		$client->inputPeerUser(
			user_id : 7580772867391966468,
			access_hash : 3122562058318589372,
		),
		$client->inputPeerChannel(
			channel_id : 3697690289453690983,
			access_hash : 3917721857743469437,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 43,
			user_id : -2747167789517129666,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 84,
			channel_id : 1085673857724685196,
		),
	),
	exclude_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -1970269705039615918,
		),
		$client->inputPeerUser(
			user_id : -4063809410488048542,
			access_hash : 6716816644390729647,
		),
		$client->inputPeerChannel(
			channel_id : 7084812750656955481,
			access_hash : 3859537172803335893,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 32,
			user_id : -8350955903625035307,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 5,
			channel_id : 5770236273315445181,
		),
	),
);
```