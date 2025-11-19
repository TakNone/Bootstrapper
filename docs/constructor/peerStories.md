# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 218

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
		user_id : -852638615381166041,
	),
	max_read_id : 99,
	stories : array(
		$client->storyItemDeleted(
			id : 29,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 49,
			date : 63,
			expire_date : 11,
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
			id : 28,
			date : 33,
			from_id : $client->peerUser(
				user_id : 8927919323535178423,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : 601745244430840634,
				),
				from_name : '43kSmYTNZhMGsplx',
				story_id : 92,
			),
			expire_date : 46,
			caption : '2zI5vM7sDN1eaUEk',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 20,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 3,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 62,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 48,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 82,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 82,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 93,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 99,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 33,
					language : 'ZbVWetic6NEo9814',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 97,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 36,
					user_id : 6915525629423748315,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 97,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 36,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 64,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 46,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 97,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 79,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 59,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 61,
					document_id : 5149687555291387261,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 22,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 684590.419921875,
						y : 347401.150390625,
						w : 406988.537109375,
						h : 1463177.84375,
						rotation : -179651.841796875,
						radius : 472527.9609375,
					),
					geo : $client->geoPointEmpty(),
					title : 'Az6wBc1n78h4tZlH',
					address : 'HtYnoISOiRgsBX2Z',
					provider : '691ZvBjewJbWU2ft',
					venue_id : 'Da4hrj7HBm0XbYte',
					venue_type : 'n3Q4sVUWef1FHYhb',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : -90149.576171875,
						y : 1499384.984375,
						w : -1548413.001953125,
						h : 1106870.384765625,
						rotation : -1755979.1845703125,
						radius : 1289695.66796875,
					),
					query_id : -4182949747836394284,
					result_id : 'N8iCGpUXhlLBEAKf',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : -1666824.1171875,
						y : -1793853.0263671875,
						w : -1699791.3271484375,
						h : -888467.6318359375,
						rotation : 1483214.669921875,
						radius : -292966.5048828125,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : 'GxOpbXhUNIRPQz3C',
						state : 'XLatS9grF80yo4cP',
						city : 'XtWPpoxKgfrjqUbL',
						street : '8DwxL9gX63Qdh5Of',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : -513662.169921875,
						y : -1224652.9873046875,
						w : 2022245.6611328125,
						h : -834852.880859375,
						rotation : 489401.87109375,
						radius : 343966.0419921875,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : -425336.44140625,
						y : -1450973.728515625,
						w : -916502.9814453125,
						h : -1009121.1357421875,
						rotation : -1786101.1826171875,
						radius : -1008497.8232421875,
					),
					channel_id : 6024451464717270448,
					msg_id : 64,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 1504491.576171875,
						y : 454656.888671875,
						w : -1496235.6044921875,
						h : 1691230.5927734375,
						rotation : 1866287.8427734375,
						radius : -10724.9951171875,
					),
					channel : $client->get_input_channel(peer : '@LiveProto'),
					msg_id : 47,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : 2094199.19921875,
						y : -2037916.7783203125,
						w : -1678471.3388671875,
						h : 15381.99609375,
						rotation : 2082605.37109375,
						radius : -609664.4541015625,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : 1211190.576171875,
						y : 713634.4091796875,
						w : -864807.7021484375,
						h : -1022250.45703125,
						rotation : -670716.791015625,
						radius : 749083.0263671875,
					),
					emoji : 'YvzSed2k8uIUENpx',
					temperature_c : 1272019.0302734375,
					color : 1,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : -726377.8662109375,
						y : 1404064.0283203125,
						w : 1674405.525390625,
						h : 1451107.7802734375,
						rotation : -1294829.771484375,
						radius : 1642043.6904296875,
					),
					slug : '6lvkZVzMsigEHepG',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(875528291000338106),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(5815931904738823719),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-421701892061771752),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(87191289415817424),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 62,
				forwards_count : 9,
				reactions : array(
					$client->reactionCount(
						chosen_order : 48,
						reaction : $client->reactionEmpty(...),
						count : 28,
					),
				),
				reactions_count : 4,
				recent_viewers : array(8491057642732297520),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(4),
		),
	),
);
```