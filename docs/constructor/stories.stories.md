# stories.stories

**Description** : *List of stories*

**Layer** : 214

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
	count : 91,
	stories : array(
		$client->storyItemDeleted(
			id : 53,
		),
		$client->storyItemSkipped(
			close_friends : true,
			id : 13,
			date : 21,
			expire_date : 93,
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
			id : 81,
			date : 27,
			from_id : $client->peerUser(
				user_id : -3104754546448428990,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(...),
				from_name : '2SnI5UFVriY8DJtG',
				story_id : 38,
			),
			expire_date : 61,
			caption : 'SdlWGiFLXN56jxDz',
			entities : array(
				$client->messageEntityUnknown(
					offset : 65,
					length : 77,
				),
				$client->messageEntityMention(
					offset : 97,
					length : 24,
				),
				$client->messageEntityHashtag(
					offset : 77,
					length : 6,
				),
				$client->messageEntityBotCommand(
					offset : 99,
					length : 2,
				),
				$client->messageEntityUrl(
					offset : 66,
					length : 81,
				),
				$client->messageEntityEmail(
					offset : 8,
					length : 63,
				),
				$client->messageEntityBold(
					offset : 87,
					length : 10,
				),
				$client->messageEntityItalic(
					offset : 37,
					length : 73,
				),
				$client->messageEntityCode(
					offset : 8,
					length : 67,
				),
				$client->messageEntityPre(
					offset : 74,
					length : 22,
					language : 'etpVB4O0drAuR26Z',
				),
				$client->messageEntityTextUrl(
					offset : 98,
					length : 95,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 48,
					length : 42,
					user_id : -8149697447629653622,
				),
				$client->inputMessageEntityMentionName(
					offset : 21,
					length : 76,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 44,
					length : 22,
				),
				$client->messageEntityCashtag(
					offset : 70,
					length : 37,
				),
				$client->messageEntityUnderline(
					offset : 26,
					length : 24,
				),
				$client->messageEntityStrike(
					offset : 8,
					length : 24,
				),
				$client->messageEntityBankCard(
					offset : 57,
					length : 78,
				),
				$client->messageEntitySpoiler(
					offset : 63,
					length : 75,
				),
				$client->messageEntityCustomEmoji(
					offset : 30,
					length : 16,
					document_id : -2978742718869666982,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 35,
					length : 15,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					title : 'f8BqXMFzpjQY1VlA',
					address : 'yAMQNXLC3I290oan',
					provider : 'OFCf3SaAuWL84Kl0',
					venue_id : 'aD5PoJY7HvncBgeO',
					venue_type : 'LjZFioKaMDB72zAG',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					query_id : 5121916722312058452,
					result_id : 'h9GTr6PZEVyXSex0',
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
					channel_id : -2856086329209650996,
					msg_id : 81,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel : $client->inputChannelEmpty(...),
					msg_id : 32,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(...),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(...),
					emoji : 'kIPyFT7zpw9Gquft',
					temperature_c : -1761424.0302734375,
					color : 69,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(...),
					slug : 'gxnpGWKdkliI1eco',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-3182687102334458549),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(6761176572511538969),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-3078825747316595903),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-7814245304060432261),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 70,
				forwards_count : 20,
				reactions : array(
					$client->reactionCount(...),
				),
				reactions_count : 65,
				recent_viewers : array(7976986764345356340),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(70),
		),
	),
	pinned_to_top : array(21),
	chats : array(
		$client->chatEmpty(
			id : 9078761920868197438,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1378863441336201685,
			title : 'Ctpc9HFoNbVnT1iW',
			photo : $client->chatPhotoEmpty(),
			participants_count : 76,
			date : 23,
			version : 30,
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
				until_date : 0,
			),
		),
		$client->chatForbidden(
			id : -6047868485149515444,
			title : '0taEZsdDXTCIfyzl',
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
			id : 8325596668637849084,
			access_hash : -5973834181946668910,
			title : 'SvIFxYOX32oGjPZR',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'F4v0ODfZ8tmRe9yU',
					reason : 'RsqwMvbGKldUI8jm',
					text : 'oqX9dcHL7mK1TaNv',
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
				until_date : 36,
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
				until_date : 51,
			),
			participants_count : 43,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 42,
			color : $client->peerColor(
				color : 33,
				background_emoji_id : 7017109667053311035,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : 4237559649140013129,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 68,
			subscription_until_date : 58,
			bot_verification_icon : 1821841885923561778,
			send_paid_messages_stars : -7703320362191934143,
			linked_monoforum_id : -528310195273585122,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 9174781107212075660,
			access_hash : -1531595877215900697,
			title : 'AHbY9swatLgD5Xqj',
			until_date : 83,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6461513141518379988,
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
			id : -1323638509346728797,
			access_hash : -3090389474791247167,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 4,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6UBuA0CDJ7zkrvZW',
					reason : 'bWTIuEXhPSeBQ3nw',
					text : 'GDHhysad5qiJQlYW',
				),
			),
			bot_inline_placeholder : 'Vgq8uY4xTLN29kXc',
			lang_code : 'LVHAudG3vb7XiIpx',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 95,
			color : $client->peerColor(
				color : 4,
				background_emoji_id : 46538328430858154,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : 4114735992180040726,
			),
			bot_active_users : 23,
			bot_verification_icon : 4603739435907893568,
			send_paid_messages_stars : 681218972948889964,
		),
	),
);
```