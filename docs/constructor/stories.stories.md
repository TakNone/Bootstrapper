# stories.stories

**Description** : *List of stories*

**Layer** : 211

```tl
stories.stories#63c3dd0a flags:# count:int stories:Vector<StoryItem> pinned_to_top:flags.0?Vector<int> chats:Vector<Chat> users:Vector<User> = stories.Stories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of stories that can be fetched |
| <mark>stories</mark> | [`Vector<StoryItem>`](type/StoryItem) | Stories |
| **pinned_to_top** | [`flags.0?Vector<int>`](type/int) | IDs of pinned stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.Stories](type/stories.Stories)

---

## Example

```php
$storiesStories = $client->stories->stories(
	count : 38,
	stories : array(
		$client->storyItemDeleted(
			id : 20,
		),
		$client->storyItemSkipped(
			close_friends : true,
			id : 53,
			date : 39,
			expire_date : 81,
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
			id : 37,
			date : 98,
			from_id : $client->peerUser(
				user_id : -9192250452305428057,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(...),
				from_name : '49ECzcjHFtIPXUra',
				story_id : 77,
			),
			expire_date : 72,
			caption : '74rkNfS6wvdesRBU',
			entities : array(
				$client->messageEntityUnknown(
					offset : 70,
					length : 15,
				),
				$client->messageEntityMention(
					offset : 58,
					length : 91,
				),
				$client->messageEntityHashtag(
					offset : 89,
					length : 73,
				),
				$client->messageEntityBotCommand(
					offset : 73,
					length : 2,
				),
				$client->messageEntityUrl(
					offset : 51,
					length : 86,
				),
				$client->messageEntityEmail(
					offset : 78,
					length : 54,
				),
				$client->messageEntityBold(
					offset : 24,
					length : 92,
				),
				$client->messageEntityItalic(
					offset : 50,
					length : 97,
				),
				$client->messageEntityCode(
					offset : 59,
					length : 10,
				),
				$client->messageEntityPre(
					offset : 78,
					length : 60,
					language : '1FQdC6IBzvRjOUTg',
				),
				$client->messageEntityTextUrl(
					offset : 78,
					length : 46,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 20,
					length : 61,
					user_id : 4696400556921384444,
				),
				$client->inputMessageEntityMentionName(
					offset : 43,
					length : 71,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 29,
					length : 28,
				),
				$client->messageEntityCashtag(
					offset : 66,
					length : 1,
				),
				$client->messageEntityUnderline(
					offset : 86,
					length : 64,
				),
				$client->messageEntityStrike(
					offset : 92,
					length : 34,
				),
				$client->messageEntityBankCard(
					offset : 50,
					length : 76,
				),
				$client->messageEntitySpoiler(
					offset : 91,
					length : 65,
				),
				$client->messageEntityCustomEmoji(
					offset : 17,
					length : 68,
					document_id : -768707319798375987,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 69,
					length : 55,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					title : 'qCeQIcEA2ByHjpnG',
					address : 'HL6cs14h2PltEwmV',
					provider : 'jh9ziflxImF0aEBd',
					venue_id : '5GpB1aY4s8LD7wJx',
					venue_type : 'vmR6ZKgfobOx1HA0',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					query_id : -7216103723134391716,
					result_id : 'qtNGQkiVTcDMsu1O',
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
					channel_id : 945640422290553851,
					msg_id : 85,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel : $client->inputChannelEmpty(...),
					msg_id : 77,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(...),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(...),
					emoji : 'Gexqy3FKdLXB9fJg',
					temperature_c : 2002256.69140625,
					color : 47,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(...),
					slug : 'XLG7WlPxHJj8SFrs',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(7616194324531367625),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-6914101747284084438),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-4861481808468083807),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(6428554788697558285),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 96,
				forwards_count : 8,
				reactions : array(
					$client->reactionCount(...),
				),
				reactions_count : 85,
				recent_viewers : array(8415526466535970612),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(41),
		),
	),
	pinned_to_top : array(33),
	chats : array(
		$client->chatEmpty(
			id : 3871862956237441925,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4995906655918546432,
			title : 'o2XivylCNGxjWuY6',
			photo : $client->chatPhotoEmpty(),
			participants_count : 32,
			date : 53,
			version : 97,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 92,
			),
		),
		$client->chatForbidden(
			id : 1897606187764608577,
			title : 'l1hNMwqn67TCFA0j',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -3582011377521121497,
			access_hash : 3963144232017022047,
			title : 'FAm7Upes1bNn8wzi',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 48,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pu9YsVBU5IhAXlCK',
					reason : 'fX1wSZA7gzETuoih',
					text : '1weAY05DTdkrytQb',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 85,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 15,
			),
			participants_count : 8,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 64,
			color : $client->peerColor(
				color : 45,
				background_emoji_id : 802640709532759110,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : -5850948957086730881,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 56,
			subscription_until_date : 72,
			bot_verification_icon : 157685818848544097,
			send_paid_messages_stars : -7750567838042848234,
			linked_monoforum_id : -7836174276036626445,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5215673771412335424,
			access_hash : -5254790373521461042,
			title : 'AgElTnFJXVuI3rMS',
			until_date : 72,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4100845183170724425,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			id : 8586047398313574341,
			access_hash : -4110432939392771806,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XChrMHqmcQG3DFt1',
					reason : 'gEoC4uyJbOxcqDph',
					text : 'yO5pKQ82DaBNj7dH',
				),
			),
			bot_inline_placeholder : 'YM3QLPOWB1jKcSp7',
			lang_code : 'GD3igcs06WrYvSlV',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 22,
			color : $client->peerColor(
				color : 10,
				background_emoji_id : -4049574001168802605,
			),
			profile_color : $client->peerColor(
				color : 98,
				background_emoji_id : 2219129677244076407,
			),
			bot_active_users : 89,
			bot_verification_icon : -8654617400393152933,
			send_paid_messages_stars : 247585784573777876,
		),
	),
);
```