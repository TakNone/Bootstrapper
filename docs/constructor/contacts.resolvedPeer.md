# contacts.resolvedPeer

**Description** : *Resolved peer*

**Layer** : 218

```tl
contacts.resolvedPeer#7f077ad9 peer:Peer chats:Vector<Chat> users:Vector<User> = contacts.ResolvedPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[contacts.ResolvedPeer](type/contacts.ResolvedPeer)

---

## Example

```php
$contactsResolvedPeer = $client->contacts->resolvedPeer(
	peer : $client->peerUser(
		user_id : -7426547719852343681,
	),
	chats : array(
		$client->chatEmpty(
			id : -6687735873848833975,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4318401036650059209,
			title : 'XOoL4KUHChjQGbwn',
			photo : $client->chatPhotoEmpty(),
			participants_count : 61,
			date : 95,
			version : 17,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 18,
			),
		),
		$client->chatForbidden(
			id : -4848340924933412242,
			title : 'IPNRzGKHh6F8cesf',
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
			id : 5722916879719461306,
			access_hash : 2618612744580064307,
			title : 'YwHtJuSxhkKnlpRq',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'keNXDYSmaqVUMjzK',
					reason : 'C0WbeDVrfKaOjudt',
					text : 'hQekMEvzOLUlS4YD',
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
				until_date : 94,
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
				until_date : 89,
			),
			participants_count : 55,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 45,
			),
			color : $client->peerColor(
				color : 25,
				background_emoji_id : 6853857827307053479,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : -8583186682874943742,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 3,
			subscription_until_date : 28,
			bot_verification_icon : 7073718173203894917,
			send_paid_messages_stars : -5389523923120077426,
			linked_monoforum_id : 9126420455160271807,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2661565194312851750,
			access_hash : -8367482170257598785,
			title : 'RUWG5O9cHPkaN0Qs',
			until_date : 62,
		),
	),
	users : array(
		$client->userEmpty(
			id : -101710760107309696,
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
			id : -2346011537558227939,
			access_hash : -3113527163573629697,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 9,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BuQFJSGclenghp1Y',
					reason : 'YHKMdgwUkZlOPmAX',
					text : 'sjIrMJEFCfw5zoZL',
				),
			),
			bot_inline_placeholder : 'FLQtBpIYXN5GwZ1o',
			lang_code : 'fjVahzPWRuEw238M',
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
				max_id : 6,
			),
			color : $client->peerColor(
				color : 35,
				background_emoji_id : -8640061711129269555,
			),
			profile_color : $client->peerColor(
				color : 98,
				background_emoji_id : 8734085917333352405,
			),
			bot_active_users : 56,
			bot_verification_icon : 2498995322924284412,
			send_paid_messages_stars : 3990895428045385544,
		),
	),
);
```