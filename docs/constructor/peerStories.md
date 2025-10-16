# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 216

```tl
peerStories#9a35e999 flags:# peer:Peer max_read_id:flags.0?int stories:Vector<StoryItem> = PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| **max_read_id** | [`flags.0?int`](type/int) | If set, contains the ID of the maximum read story |
| <mark>stories</mark> | [`Vector<StoryItem>`](type/StoryItem) | Stories |

---

## Type

[PeerStories](type/PeerStories)

---

## Example

```php
$peerStories = $client->peerStories(
	peer : $client->peerUser(
		user_id : -1243207992084438903,
	),
	max_read_id : 5,
	stories : array(
		$client->storyItemDeleted(
			id : 69,
		),
		$client->storyItemSkipped(
			close_friends : true,
			id : 83,
			date : 70,
			expire_date : 7,
		),
		$client->storyItem(
			pinned : true,
			public : true,
			close_friends : true,
			min : true,
			noforwards : true,
			edited : true,
			contacts : true,
			selected_contacts : true,
			out : true,
			id : 97,
			date : 85,
			from_id : $client->peerUser(
				user_id : -6398833182086013509,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(...),
				from_name : 'WaTk98cJqp5MrCfZ',
				story_id : 95,
			),
			expire_date : 6,
			caption : 'MfKpy7StqTFliHxu',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 24,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 5,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 28,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 47,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 98,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 28,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 39,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 20,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 86,
					language : 'nH27BsFkQ3WOge49',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 28,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 23,
					user_id : -3130547117420216376,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 80,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 22,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 47,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 60,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 52,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 0,
					document_id : 5889682260938732943,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 9,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					title : 'N5B3OVM92zmZWkrc',
					address : 'u64jhYH5A03snxlr',
					provider : 'ZV3J5Uafr0RxGD4g',
					venue_id : 'joI6bCtrg1uwTUni',
					venue_type : 'UtGJFqMD74pgOm9W',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					query_id : -5352417910571576565,
					result_id : 'w5hc1Lu8eV3DUdCQ',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					address : $client->geoPointAddress(...),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(...),
					reaction : $client->reactionEmpty(...),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel_id : 8965428518755348253,
					msg_id : 98,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel : $client->inputChannelEmpty(...),
					msg_id : 88,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(...),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(...),
					emoji : 'sofcJmpk3zld9CLv',
					temperature_c : -968064.779296875,
					color : 68,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(...),
					slug : 'os2pFI5kxWiQnr8y',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-7199414820125621310),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-3908888643179061034),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(7902627891786096053),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-9201394268871535421),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 52,
				forwards_count : 36,
				reactions : array(
					$client->reactionCount(...),
				),
				reactions_count : 15,
				recent_viewers : array(5785351530842794018),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(88),
		),
	),
);
```