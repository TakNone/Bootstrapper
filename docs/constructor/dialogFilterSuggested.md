# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 214

```tl
dialogFilterSuggested#77744d4a filter:DialogFilter description:string = DialogFilterSuggested;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter</mark> | [`DialogFilter`](type/DialogFilter) | Folder info |
| <mark>description</mark> | [`string`](type/string) | Folder description |

---

## Type

[DialogFilterSuggested](type/DialogFilterSuggested)

---

## Example

```php
$dialogFilterSuggested = $client->dialogFilterSuggested(
	filter : $client->dialogFilter(
		contacts : true,
		non_contacts : true,
		groups : true,
		broadcasts : true,
		bots : true,
		exclude_muted : true,
		exclude_read : true,
		exclude_archived : true,
		title_noanimate : true,
		id : 24,
		title : $client->textWithEntities(
			text : 'CGVnLA325hkSX7sa',
			entities : array(
				$client->messageEntityUnknown(...),
				$client->messageEntityMention(...),
				$client->messageEntityHashtag(...),
				$client->messageEntityBotCommand(...),
				$client->messageEntityUrl(...),
				$client->messageEntityEmail(...),
				$client->messageEntityBold(...),
				$client->messageEntityItalic(...),
				$client->messageEntityCode(...),
				$client->messageEntityPre(...),
				$client->messageEntityTextUrl(...),
				$client->messageEntityMentionName(...),
				$client->inputMessageEntityMentionName(...),
				$client->messageEntityPhone(...),
				$client->messageEntityCashtag(...),
				$client->messageEntityUnderline(...),
				$client->messageEntityStrike(...),
				$client->messageEntityBankCard(...),
				$client->messageEntitySpoiler(...),
				$client->messageEntityCustomEmoji(...),
				$client->messageEntityBlockquote(...),
			),
		),
		emoticon : 'ayc7jxFbKkE2ivLN',
		color : 25,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -7862418478589411011,
			),
			$client->inputPeerUser(
				user_id : -2124240782503509922,
				access_hash : -4814748068291234443,
			),
			$client->inputPeerChannel(
				channel_id : 1132524558520507746,
				access_hash : 8393869350257807227,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 31,
				user_id : 7400587170209910090,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 86,
				channel_id : 2278711160420230553,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 1596052814542086557,
			),
			$client->inputPeerUser(
				user_id : 2162042620344871422,
				access_hash : -4871360195906098064,
			),
			$client->inputPeerChannel(
				channel_id : -5788526534708137334,
				access_hash : 646683934663004126,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 72,
				user_id : -7710340648558535133,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 16,
				channel_id : 254015538485980603,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : 6584238933341526826,
			),
			$client->inputPeerUser(
				user_id : 4485486964290138513,
				access_hash : -7975920990454743115,
			),
			$client->inputPeerChannel(
				channel_id : 7938787080102379980,
				access_hash : -8839481597364576193,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 12,
				user_id : -1988766182387733216,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 29,
				channel_id : -8117884452002228616,
			),
		),
	),
	description : 'CSXmKg0sNVntdyAF',
);
```