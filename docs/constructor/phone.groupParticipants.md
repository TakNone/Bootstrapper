# phone.groupParticipants

**Description** : *Info about the participants of a group call or livestream*

**Layer** : 218

```tl
phone.groupParticipants#f47751b6 count:int participants:Vector<GroupCallParticipant> next_offset:string chats:Vector<Chat> users:Vector<User> version:int = phone.GroupParticipants;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of participants |
| <mark>participants</mark> | [`Vector<GroupCallParticipant>`](type/GroupCallParticipant) | List of participants |
| <mark>next_offset</mark> | [`string`](type/string) | If not empty, the specified list of participants is partial, and more participants can be fetched specifying this parameter as offset in phone.getGroupParticipants |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| <mark>version</mark> | [`int`](type/int) | Version info |

---

## Type

[phone.GroupParticipants](type/phone.GroupParticipants)

---

## Example

```php
$phoneGroupParticipants = $client->phone->groupParticipants(
	count : 5,
	participants : array(
		$client->groupCallParticipant(
			muted : true,
			left : true,
			can_self_unmute : true,
			just_joined : true,
			versioned : true,
			min : true,
			muted_by_you : true,
			volume_by_admin : true,
			self : true,
			video_joined : true,
			peer : $client->peerUser(
				user_id : 700451994349879588,
			),
			date : 94,
			active_date : 57,
			source : 3,
			volume : 62,
			about : 'gOQopz7v0e6Tldik',
			raise_hand_rating : -5381228428167064300,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'sEXHWj9wOUI3ADPt',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'uKznP95hTLfN7XOM',
						sources : array(96),
					),
				),
				audio_source : 16,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'sZQogjC2wc3tqOxa',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(
						semantics : 'htMKSm9kyVBxdJbQ',
						sources : array(97),
					),
				),
				audio_source : 78,
			),
			paid_stars_total : -7130971290496966113,
		),
	),
	next_offset : 'lo0QIMuSkC4UVvOr',
	chats : array(
		$client->chatEmpty(
			id : -371875843957081933,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1977529000431976772,
			title : 'TNrPhD1VRft32dq6',
			photo : $client->chatPhotoEmpty(),
			participants_count : 16,
			date : 83,
			version : 21,
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
				until_date : 27,
			),
		),
		$client->chatForbidden(
			id : 2336395756687595119,
			title : 'jGIFMyrWltwROU1u',
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
			id : 1217184964542619430,
			access_hash : 4898946530998569604,
			title : 'QkMGySLoEhXJ26Px',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 85,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Eo8MFPZIdzBe6UbG',
					reason : '1Sg2ibOPkRxztfcM',
					text : 'S16IlAdEkUKwHhZB',
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
				until_date : 80,
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
				until_date : 24,
			),
			participants_count : 17,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 13,
			),
			color : $client->peerColor(
				color : 31,
				background_emoji_id : -1062136948270336862,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : 1576096924235049580,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 48,
			subscription_until_date : 28,
			bot_verification_icon : -5225796050304853044,
			send_paid_messages_stars : 4779957350529996405,
			linked_monoforum_id : 7061597537875850812,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8873553144519834492,
			access_hash : -5998749049323669009,
			title : '3B0nYZWpwKjroJPR',
			until_date : 98,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7366613477554642645,
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
			id : -4936655343934378732,
			access_hash : 7893875775192603791,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 64,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XsfxuOHIhyB9oFMr',
					reason : '42rChfsxHYoIwgqe',
					text : 'yIklzrnHqWd1wAKi',
				),
			),
			bot_inline_placeholder : 'K81ibvtlSkOAZwU7',
			lang_code : '2xYbqDLQuSGARvf1',
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
				max_id : 99,
			),
			color : $client->peerColor(
				color : 38,
				background_emoji_id : -8736102151567035145,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : -8272643623036081929,
			),
			bot_active_users : 55,
			bot_verification_icon : 8324655803337677137,
			send_paid_messages_stars : 851438829741376664,
		),
	),
	version : 10,
);
```