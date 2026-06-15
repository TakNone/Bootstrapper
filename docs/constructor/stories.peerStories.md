# stories.peerStories

**Description** : *Active story list of a specific peer*

**Layer** : 227

```tl
stories.peerStories#cae68768 stories:PeerStories chats:Vector<Chat> users:Vector<User> = stories.PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stories</mark> | [`PeerStories`](type/PeerStories) | Stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.PeerStories](type/stories.PeerStories)

---

## Example

```php
$storiesPeerStories = $client->stories->peerStories(
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : 8069699085798195471,
		),
		max_read_id : 44,
		stories : array(
			$client->storyItemDeleted(
				id : 67,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 15,
				date : 91,
				expire_date : 87,
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
				id : 75,
				date : 10,
				from_id : $client->peerUser(
					user_id : 6246955435508456347,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'rUTys9fXnh3gkNmZ',
					story_id : 92,
				),
				expire_date : 98,
				caption : 'Xkl0BZS3oMh2bFO8',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 77,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 19,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 55,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 7,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 14,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 44,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 66,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 38,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 8,
						language : 'DOtZ7UG2jv1drBzg',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 99,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 12,
						user_id : -752745129968504291,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 55,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 46,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 41,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 12,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 14,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 31,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 93,
						document_id : -879938315153968810,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 44,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 4,
						date : 43,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 63,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 81,
						old_text : 'DJqZ9xXjo3tgliMQ',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 30,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'a1gVZHENIsR6xfhA',
						address : 'wNy359npRPqiAmaI',
						provider : 'S2TKxJ8aNoU5qe3F',
						venue_id : '6HbmYV8qpgorsikx',
						venue_type : '4bWieIXsBSuKNAyO',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : 2446463803389016582,
						result_id : 'YkuShx7z81lfyCaL',
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
						channel_id : 5473759088709079157,
						msg_id : 10,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 14,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'WQXYIe7TEJaCbhKd',
						temperature_c : -593463.4990234375,
						color : 69,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'D79I8XT0pdknYJaV',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(2442220839906964182),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(7705673482070368252),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(-2975796078039083468),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(2509425609604308172),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 68,
					forwards_count : 47,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 54,
					recent_viewers : array(-8675409609199921264),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(55),
				music : $client->documentEmpty(
					id : 703507486544287518,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -3489447114576765558,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -6538103399147638570,
			title : 'pXSKurJtPs4OGRbB',
			photo : $client->chatPhotoEmpty(),
			participants_count : 71,
			date : 24,
			version : 16,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 7,
			),
		),
		$client->chatForbidden(
			id : 485233861774686389,
			title : 'WQN3zGdxO6cVCoFs',
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
			id : -3832183279668665381,
			access_hash : -2590628093804869856,
			title : 'qvkzLIJ2KF5pQtRS',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Erv8TO97kxgjFeYZ',
					reason : '8tNIB1wjE7ArdObU',
					text : 'nxGuLSsywcvKrj3h',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 84,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 86,
			),
			participants_count : 66,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 73,
			),
			color : $client->peerColor(
				color : 0,
				background_emoji_id : 4736999965666325224,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : -5707178851521386506,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 42,
			subscription_until_date : 62,
			bot_verification_icon : 6612103227973711324,
			send_paid_messages_stars : 1252477710749392412,
			linked_monoforum_id : 4797226011615241622,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -5542494144121516576,
			access_hash : 3479754428016774852,
			title : 'KhOY3FjQNc0yBvTC',
			until_date : 0,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1770387610738895205,
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
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 89257701448556597,
			access_hash : -9028355901219678113,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 60,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wVdaO4ILe8Xp9nNf',
					reason : 'd0GbozKCyQ7qm51J',
					text : 'RVBCZYOdm4zFKiJ9',
				),
			),
			bot_inline_placeholder : 'qiJeXYAHfZtBjDT7',
			lang_code : 'WQ2jtYlFsUPN0q1c',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 35,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : 8418603677678932800,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : -3785314095141152979,
			),
			bot_active_users : 1,
			bot_verification_icon : -7280441845611805089,
			send_paid_messages_stars : 6170370273636040867,
		),
	),
);
```