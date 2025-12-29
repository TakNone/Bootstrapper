# contacts.blockedSlice

**Description** : *Incomplete list of blocked users*

**Layer** : 218

```tl
contacts.blockedSlice#e1664194 count:int blocked:Vector<PeerBlocked> chats:Vector<Chat> users:Vector<User> = contacts.Blocked;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of elements in the list |
| <mark>blocked</mark> | [`Vector<PeerBlocked>`](type/PeerBlocked) | List of blocked users |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Blocked chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Blocked](type/contacts.Blocked)

---

## Example

```php
$contactsBlocked = $client->contacts->blockedSlice(
	count : 86,
	blocked : array(
		$client->peerBlocked(
			peer_id : $client->peerUser(
				user_id : -3304391019491416650,
			),
			date : 43,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -2277163375325271452,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6192396594004415655,
			title : 'WTuJD7fVsytlGBwv',
			photo : $client->chatPhotoEmpty(),
			participants_count : 97,
			date : 97,
			version : 92,
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
				until_date : 44,
			),
		),
		$client->chatForbidden(
			id : 7021968408843565315,
			title : 'bIvRCPJ6lSh5KDUg',
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
			id : -3563636323836060915,
			access_hash : 6499787360932504891,
			title : 'WaY7XBom4sZAelbP',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'N94xwAjuBTQa36bq',
					reason : 'porPngtO1sEiDFJb',
					text : 'uFe7GtEULcySnhmz',
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
				until_date : 69,
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
				until_date : 4,
			),
			participants_count : 64,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 83,
			),
			color : $client->peerColor(
				color : 55,
				background_emoji_id : 6485899354131151505,
			),
			profile_color : $client->peerColor(
				color : 45,
				background_emoji_id : 3966952878380792031,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 73,
			subscription_until_date : 63,
			bot_verification_icon : 6465659077955315608,
			send_paid_messages_stars : -222077562078486428,
			linked_monoforum_id : -4065387076584285722,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6486299316158007936,
			access_hash : -7362214286690841497,
			title : 'Ef4dRtSvXyOs8uFh',
			until_date : 78,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3241417783284625860,
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
			id : -1316511588590308118,
			access_hash : 188868359896589299,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 97,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Os9wzPy8fubHXjYh',
					reason : 'HZaefJ7VoD23uNC1',
					text : 'NVcwBgJ1ZdYC0alH',
				),
			),
			bot_inline_placeholder : '9cZaR7s2tJL5KviI',
			lang_code : 'b04XzJeiSIKtsk9y',
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
				max_id : 94,
			),
			color : $client->peerColor(
				color : 88,
				background_emoji_id : -8373608074980184376,
			),
			profile_color : $client->peerColor(
				color : 86,
				background_emoji_id : 6541820531990575005,
			),
			bot_active_users : 70,
			bot_verification_icon : 1105149165795442741,
			send_paid_messages_stars : -3705530279353482021,
		),
	),
);
```