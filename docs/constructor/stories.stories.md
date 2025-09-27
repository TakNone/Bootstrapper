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
	count : 94,
	stories : array(
		$client->storyItemDeleted(
			id : 17,
		),
		$client->storyItemSkipped(
			close_friends : true,
			id : 11,
			date : 17,
			expire_date : 19,
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
			id : 39,
			date : 55,
			from_id : $client->peerUser(
				user_id : 4299499630258245062,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(...),
				from_name : 'aSBdXneFApj9hCTE',
				story_id : 83,
			),
			expire_date : 68,
			caption : 'hljtRETLq7voKcYp',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 55,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 72,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 100,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 58,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 30,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 7,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 21,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 86,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 96,
					language : '91ptuAMbhZYRgUde',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 77,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 56,
					user_id : -2612871328036618764,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 32,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 1,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 2,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 65,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 31,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 28,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 51,
					document_id : -6064127454825283364,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 72,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					title : 'ZtzxI0O24FQmkAGY',
					address : 'OL2i8HKgQ3BWFfIJ',
					provider : 'vcoRWA5tSGCBi0HQ',
					venue_id : 'OFLYiBJaldj4SsAQ',
					venue_type : '2LDjAcaQYHIGNi6O',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					query_id : -1740943956704358955,
					result_id : 'tbhuJM8O4jeaordz',
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
					channel_id : -374569830323741328,
					msg_id : 93,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel : $client->inputChannelEmpty(...),
					msg_id : 34,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(...),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(...),
					emoji : 'OJWqMCEdHxIe0GzT',
					temperature_c : 1577065.2509765625,
					color : 76,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(...),
					slug : '8ZhADULNjfwCuOPI',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-7948429023872057152),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-6832610563291500711),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(7225253677119206137),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-4747767082337761750),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 56,
				forwards_count : 65,
				reactions : array(
					$client->reactionCount(...),
				),
				reactions_count : 20,
				recent_viewers : array(-7088205472686119737),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(21),
		),
	),
	pinned_to_top : array(90),
	chats : array(
		$client->chatEmpty(
			id : -4923690184483816108,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -3106742340911917576,
			title : '0saoBQm8l7jDUCgH',
			photo : $client->chatPhotoEmpty(),
			participants_count : 7,
			date : 28,
			version : 62,
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
				until_date : 2,
			),
		),
		$client->chatForbidden(
			id : 4939128006091601039,
			title : 'TputnHlY4r923FIg',
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
			id : -2878824889501995820,
			access_hash : 1682266044794776293,
			title : 'K70fNtwFl9dckXnm',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 39,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dUbYsNhx96AkjQ2C',
					reason : 'LhiZMqBwaEdIH9yc',
					text : '5MsEu4dvNeFIjpcS',
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
				until_date : 39,
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
				until_date : 90,
			),
			participants_count : 28,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 33,
			color : $client->peerColor(
				color : 47,
				background_emoji_id : -2963072360013116550,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : 5539884113861643253,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 89,
			subscription_until_date : 54,
			bot_verification_icon : 6312956900542986688,
			send_paid_messages_stars : -6956270076937017792,
			linked_monoforum_id : 1109080036904675428,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2214839200059709697,
			access_hash : 3566276500888144457,
			title : '3mOvTyPibhn5p0jF',
			until_date : 70,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5906357151032136277,
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
			id : -2897859205026876133,
			access_hash : 1832152208434820930,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 80,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ykx2tS9hLswGRqiX',
					reason : 'NUinEaAShJokxg2X',
					text : 'iqEbL8VmUdlNvn6g',
				),
			),
			bot_inline_placeholder : 'ZiVmfgPkwrl8oQzH',
			lang_code : 'bEVzZwufGDX8c4ve',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 98,
			color : $client->peerColor(
				color : 96,
				background_emoji_id : 4933983572008853868,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : -5572231319133508728,
			),
			bot_active_users : 39,
			bot_verification_icon : -1191516008739903412,
			send_paid_messages_stars : 2842745203164712478,
		),
	),
);
```