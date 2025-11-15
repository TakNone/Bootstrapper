# updates

**Description** : *Full constructor of updates*

**Layer** : 216

```tl
updates#74ae4240 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq</mark> | [`int`](type/int) | Total number of sent updates |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updates(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 45,
				peer_id : $client->peerUser(...),
			),
			pts : 73,
			pts_count : 35,
		),
		$client->updateMessageID(
			id : 0,
			random_id : -7776194191704141293,
		),
		$client->updateDeleteMessages(
			messages : array(25),
			pts : 98,
			pts_count : 37,
		),
		$client->updateUserTyping(
			user_id : 2670503610757224010,
			top_msg_id : 23,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 3885520116506109321,
			from_id : $client->peerUser(
				user_id : -8154858124844791069,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 2366468896210746064,
				self_participant : $client->chatParticipant(...),
			),
		),
		$client->updateUserStatus(
			user_id : 2413681957912845891,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -2255585615548101729,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 49,
			device : 'R9mkgsYyKBXPM5vo',
			location : '1Rqvn8sJbe3cE6NU',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 5285523140622526146,
				chat_id : 3,
				date : 1,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(...),
			),
			qts : 50,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 28,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 43,
			),
			date : 92,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 97,
			max_date : 62,
			date : 90,
		),
		$client->updateChatParticipantAdd(
			chat_id : 1910163302881306325,
			user_id : -2278510104659006596,
			inviter_id : -5768232216325292987,
			date : 49,
			version : 73,
		),
		$client->updateChatParticipantDelete(
			chat_id : 2306934264178027886,
			user_id : -337879490853302837,
			version : 100,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 83,
					ip_address : '127.0.0.1',
					port : 60,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(...),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 97,
				ios_sound : $client->notificationSoundDefault(...),
				android_sound : $client->notificationSoundDefault(...),
				other_sound : $client->notificationSoundDefault(...),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(...),
				stories_android_sound : $client->notificationSoundDefault(...),
				stories_other_sound : $client->notificationSoundDefault(...),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 17,
			type : '087XMnzAg9osTDcW',
			message : '5ZHduA80Yr6m4XpC',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 92,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 73,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 88,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 75,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 20,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 71,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 18,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 71,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 79,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 38,
					language : 'O7m4YzetKDJa9Qr2',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 65,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 74,
					user_id : -8190467110057293661,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 87,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 51,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 47,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 74,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 45,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 77,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 23,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 3,
					document_id : -8914669666545255432,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 59,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-2684254214378720026),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(3257127317260973348),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-922768148963837938),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-7135623672343473940),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -6278112978031352182,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 44,
			peer : $client->peerUser(
				user_id : -588649611309049296,
			),
			top_msg_id : 30,
			max_id : 93,
			still_unread_count : 95,
			pts : 32,
			pts_count : 88,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 2816244771496573399,
			),
			max_id : 29,
			pts : 66,
			pts_count : 75,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 6703607445695230837,
				url : 'https://docs.liveproto.dev',
			),
			pts : 11,
			pts_count : 88,
		),
		$client->updateReadMessagesContents(
			messages : array(54),
			pts : 100,
			pts_count : 6,
			date : 47,
		),
		$client->updateChannelTooLong(
			channel_id : -2606576511758642450,
			pts : 100,
		),
		$client->updateChannel(
			channel_id : 724756509886519232,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 50,
				peer_id : $client->peerUser(...),
			),
			pts : 29,
			pts_count : 81,
		),
		$client->updateReadChannelInbox(
			folder_id : 26,
			channel_id : -2968687114392709333,
			max_id : 58,
			still_unread_count : 14,
			pts : 13,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -8394148853753012479,
			messages : array(17),
			pts : 46,
			pts_count : 19,
		),
		$client->updateChannelMessageViews(
			channel_id : -59548994925986407,
			id : 75,
			views : 77,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 865883642804960762,
			user_id : -6952772998567310181,
			is_admin : true,
			version : 23,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(...),
				packs : array(
					$client->stickerPack(...),
				),
				keywords : array(
					$client->stickerKeyword(...),
				),
				documents : array(
					$client->documentEmpty(...),
					$client->document(...),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(-4680025675543711834),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 8236681048926546584,
			user_id : -5556931577546852738,
			query : 'RsP9UIE83paTb01C',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'lBOF9s3KSJ0Uqp8w',
		),
		$client->updateBotInlineSend(
			user_id : 5248681236595432186,
			query : 'JoN71fRqI3AB285l',
			geo : $client->geoPointEmpty(),
			id : 'OoCzMT9StxureynG',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 87,
				id : 5826028353033834566,
				access_hash : -7886172818907382840,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 20,
				peer_id : $client->peerUser(...),
			),
			pts : 30,
			pts_count : 15,
		),
		$client->updateBotCallbackQuery(
			query_id : -7619402905598001959,
			user_id : -2458471683999434543,
			peer : $client->peerUser(
				user_id : -3691400955148508343,
			),
			msg_id : 100,
			chat_instance : -2164920152170859961,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'N9LtqER0A3hWP2OI',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(...),
			),
			pts : 75,
			pts_count : 35,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 6681469827766844571,
			user_id : -762823484653365321,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 85,
				id : -7281183318833622367,
				access_hash : 6900786179154156910,
			),
			chat_instance : 2543871915921173756,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '3f7DotrSBQkawPJi',
		),
		$client->updateReadChannelOutbox(
			channel_id : -3973156217308089540,
			max_id : 52,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -2177541979093198210,
			),
			top_msg_id : 47,
			saved_peer_id : $client->peerUser(
				user_id : 322267793729699148,
			),
			draft : $client->draftMessageEmpty(
				date : 89,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 1943107357297875614,
			webpage : $client->webPageEmpty(
				id : 9114437895507021996,
				url : 'https://docs.liveproto.dev',
			),
			pts : 84,
			pts_count : 100,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 9,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 7,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 51,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'KRhMx6SYm35uyigj',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 5857004418940276232,
			data : $client->dataJSON(
				data : 'doVjGmKwTH2S9401',
			),
			timeout : 25,
		),
		$client->updateBotShippingQuery(
			query_id : 2579532138692805696,
			user_id : 4012045969809791187,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'eufHy7WYDw61qzOt',
				street_line2 : 'WN8t4HYA6BbTfsgn',
				city : 'N3D6HxS9B4dsrhmE',
				state : 'HW5M1fUNQd3ogRqc',
				country_iso2 : 'MAHt12NsbdUR3kep',
				post_code : 'rcDuM3j7sKnazieS',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 4827643241467145375,
			user_id : -780859365390744262,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : '8hEJcqDa2jlOKTmf',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(...),
			),
			shipping_option_id : 'LNUFOPoC0hlqnHDM',
			currency : 'Ro2l6LtMhfQSuw1A',
			total_amount : 985305653195036024,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -9139590813645505260,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'AcE0Xpa4wCR39ber',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'lJnCeqx9ESmQ8gjF',
				from_version : 35,
				version : 69,
				strings : array(
					$client->langPackString(...),
					$client->langPackStringPluralized(...),
					$client->langPackStringDeleted(...),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -1625161860234838281,
			top_msg_id : 89,
			saved_peer_id : $client->peerUser(
				user_id : -1473527980115046819,
			),
			messages : array(32),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 8291639691015074731,
			available_min_id : 49,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
			saved_peer_id : $client->peerUser(
				user_id : -5022635298565880809,
			),
		),
		$client->updateMessagePoll(
			poll_id : -4361262726697335054,
			poll : $client->poll(
				id : 5784227544582594009,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 78,
				close_date : 99,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 89,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'v2lK5nWE8AYjgGOM',
				solution_entities : array(
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
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 7706863224583969356,
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
				until_date : 98,
			),
			version : 30,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(...),
					folder_id : 85,
				),
			),
			pts : 65,
			pts_count : 66,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -1671047718356044207,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 58,
				request_chat_title : 'O7yX8fgcaSuUBDjh',
				request_chat_date : 71,
				business_bot_id : -217560301946237689,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 4765220354967952831,
				registration_month : 'NFneH3soxEgaVWmB',
				phone_country : '+1234567890',
				name_change_date : 62,
				photo_change_date : 16,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(...),
					expires : 73,
					distance : 38,
				),
				$client->peerSelfLocated(
					expires : 13,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 98,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 5344830020121851225,
			),
			messages : array(69),
			sent_messages : array(61),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 7644105593660020490,
				access_hash : -2110731890154858832,
				slug : 'QNdLC2qrXGsYpb5E',
				title : '1HiVkoy9mOYErIsZ',
				document : $client->documentEmpty(...),
				settings : array(
					$client->themeSettings(...),
				),
				emoticon : 'KVnGQOu8sI4fp51b',
				installs_count : 86,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -2475388694579708964,
			),
			msg_id : 29,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 8946113752203011722,
			peer : $client->peerUser(
				user_id : -4932533685540057842,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 59,
		),
		$client->updateDialogFilter(
			id : 29,
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
				id : 80,
				title : $client->textWithEntities(...),
				emoticon : 'vjpisA8TLy3cBtC0',
				color : 26,
				pinned_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				include_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
				exclude_peers : array(
					$client->inputPeerEmpty(...),
					$client->inputPeerSelf(...),
					$client->inputPeerChat(...),
					$client->inputPeerUser(...),
					$client->inputPeerChannel(...),
					$client->inputPeerUserFromMessage(...),
					$client->inputPeerChannelFromMessage(...),
				),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(69),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 5374500265709609936,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 3207036523660514002,
			id : 27,
			forwards : 52,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -8496591696734839018,
			top_msg_id : 55,
			read_max_id : 33,
			broadcast_id : -257198064487703789,
			broadcast_post : 55,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -77706443610193484,
			top_msg_id : 93,
			read_max_id : 27,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 4667149209876009652,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 3295065084559479018,
			top_msg_id : 86,
			from_id : $client->peerUser(
				user_id : 5959269759469948765,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 7055957776171660550,
			),
			messages : array(34),
			pts : 70,
			pts_count : 0,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -8769813453614658584,
			messages : array(96),
			pts : 52,
			pts_count : 47,
		),
		$client->updateChat(
			chat_id : -7649159434514124704,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 761335248962070287,
				access_hash : 157110049410379766,
			),
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
					peer : $client->peerUser(...),
					date : 26,
					active_date : 24,
					source : 67,
					volume : 49,
					about : 'm0CPuMKTFxDEzpw8',
					raise_hand_rating : -8487329165864295486,
					video : $client->groupCallParticipantVideo(...),
					presentation : $client->groupCallParticipantVideo(...),
				),
			),
			version : 54,
		),
		$client->updateGroupCall(
			chat_id : -6818698984578424905,
			call : $client->groupCallDiscarded(
				id : 338979821377143037,
				access_hash : 716162805005380473,
				duration : 5,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 1464414681241654288,
			),
			ttl_period : 55,
		),
		$client->updateChatParticipant(
			chat_id : 2548288473991138988,
			date : 82,
			actor_id : -825921335871772348,
			user_id : 2977843280517654395,
			prev_participant : $client->chatParticipant(
				user_id : -6862202439030222691,
				inviter_id : -8456077245747495393,
				date : 86,
			),
			new_participant : $client->chatParticipant(
				user_id : 1460820027263063636,
				inviter_id : -7721266665795959545,
				date : 18,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'plJCQZ4idsa092yE',
				admin_id : 8072929430384316091,
				date : 58,
				start_date : 41,
				expire_date : 42,
				usage_limit : 97,
				usage : 88,
				requested : 66,
				subscription_expired : 89,
				title : 'VsI9hOQAd7qjPicW',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 4,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 2545435184138514803,
			date : 61,
			actor_id : -5765163391381396991,
			user_id : -8252363424748860120,
			prev_participant : $client->channelParticipant(
				user_id : -8612985439314590541,
				date : 72,
				subscription_until_date : 53,
			),
			new_participant : $client->channelParticipant(
				user_id : -8555996507070208158,
				date : 69,
				subscription_until_date : 47,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'UQy3s019RVfjXNHC',
				admin_id : -264557273336075483,
				date : 89,
				start_date : 12,
				expire_date : 59,
				usage_limit : 69,
				usage : 82,
				requested : 99,
				subscription_expired : 29,
				title : 'hQjH3oBTJCDnUZ0P',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 84,
		),
		$client->updateBotStopped(
			user_id : 4833949819437990911,
			date : 85,
			stopped : true,
			qts : 92,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'Uyvs5rEbcY8pfqRP',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -2741184308484299945,
			),
			bot_id : -786464927345630368,
			commands : array(
				$client->botCommand(
					command : '1AxFbkEprTu8Ddvs',
					description : '7wEzVYgkdTnKyUi8',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -6173991196822299751,
			),
			requests_pending : 47,
			recent_requesters : array(6392955479097098297),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -2897885249251137783,
			),
			date : 93,
			user_id : 4031933478930038341,
			about : '8NCbw3IQ0JnSL2mz',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'zORYwXPsei5ICKZq',
				admin_id : 5762100094463836079,
				date : 59,
				start_date : 20,
				expire_date : 41,
				usage_limit : 48,
				usage : 35,
				requested : 89,
				subscription_expired : 82,
				title : 'aJt4jTU5HNcV2vpk',
				subscription_pricing : $client->starsSubscriptionPricing(...),
			),
			qts : 78,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -4272524307540918833,
			),
			msg_id : 77,
			top_msg_id : 76,
			saved_peer_id : $client->peerUser(
				user_id : -3601973692418180843,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(...),
				),
				recent_reactions : array(
					$client->messagePeerReaction(...),
				),
				top_reactors : array(
					$client->messageReactor(...),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -7697567790505928596,
		),
		$client->updateBotMenuButton(
			bot_id : 9169619950455655119,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -2026906145371351164,
			),
			msg_id : 87,
			transcription_id : 3072001495925814863,
			text : '7cSrshD6eGWLnjvH',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 3651258011895438182,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -8088850786857149731,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 5565897187615705519,
			),
			msg_id : 79,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 9,
					h : 4,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 5,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->updateChannelPinnedTopic(
			pinned : true,
			channel_id : 3327234030680417882,
			topic_id : 74,
		),
		$client->updateChannelPinnedTopics(
			channel_id : -2180287941746775537,
			order : array(97),
		),
		$client->updateUser(
			user_id : 9219930256261165003,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : -9216634412915691403,
			),
			story : $client->storyItemDeleted(
				id : 47,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -409931513419843024,
			),
			max_id : 41,
		),
		$client->updateStoryID(
			id : 84,
			random_id : 2996282560103365522,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 52,
				cooldown_until_date : 53,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 2820573179845002851,
			),
			story_id : 6,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 8201181652368008194,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : '5o6hrb0I71q2lOE4',
				user_id : 6019954786312843259,
				giveaway_msg_id : 30,
				date : 21,
				expires : 77,
				used_gift_slug : '2pOXoKyHUPiCT8sa',
				multiplier : 42,
				stars : 3506627699304381713,
			),
			qts : 10,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -2734311892930455848,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 8009363511455118887,
			),
			wallpaper : $client->wallPaper(
				id : 6925893501913185816,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : -2982552169143975434,
				slug : '2qKPGWytRAB4c3Xg',
				document : $client->documentEmpty(...),
				settings : $client->wallPaperSettings(...),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 213056718618609468,
			),
			msg_id : 94,
			date : 93,
			actor : $client->peerUser(
				user_id : -2680371436103308041,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'iOr2bV4wSg9vDRHB',
				),
				$client->reactionCustomEmoji(
					document_id : 1914064640697495699,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'mksO2jXB5PNwF9pu',
				),
				$client->reactionCustomEmoji(
					document_id : 2688779442134077819,
				),
				$client->reactionPaid(),
			),
			qts : 13,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 9023386914286250100,
			),
			msg_id : 44,
			date : 8,
			reactions : array(
				$client->reactionCount(
					chosen_order : 76,
					reaction : $client->reactionEmpty(...),
					count : 28,
				),
			),
			qts : 30,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(...),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(...),
				),
				$client->dialogPeerFolder(
					folder_id : 58,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'uaUBj9GgicEd52To',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 76,
					shortcut : 'Gyi3npf54WZEOvrK',
					top_message : 82,
					count : 87,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 24,
				shortcut : 'zOa5g6u4Wn7SHmKT',
				top_message : 29,
				count : 89,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 84,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 19,
				peer_id : $client->peerUser(...),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 100,
			messages : array(16),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'aO8PUm0iVY6jw1xf',
				user_id : -410249721596084682,
				dc_id : 75,
				date : 57,
				rights : $client->businessBotRights(...),
			),
			qts : 55,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'MIJCY7APoGHRpueE',
			message : $client->messageEmpty(
				id : 95,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 15,
				peer_id : $client->peerUser(...),
			),
			qts : 87,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'ct2sMWvVQOb5IZdJ',
			message : $client->messageEmpty(
				id : 40,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 57,
				peer_id : $client->peerUser(...),
			),
			qts : 92,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'WICwMiFn98g4AOal',
			peer : $client->peerUser(
				user_id : -4590448974290807016,
			),
			messages : array(19),
			qts : 21,
		),
		$client->updateNewStoryReaction(
			story_id : 18,
			peer : $client->peerUser(
				user_id : 6657572673783839146,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 6435624375129529638,
				nanos : 7,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -3681389244694409846,
			user_id : -3881699261978734107,
			connection_id : 'ehi4UTmBrsNcjnIW',
			message : $client->messageEmpty(
				id : 40,
				peer_id : $client->peerUser(...),
			),
			reply_to_message : $client->messageEmpty(
				id : 65,
				peer_id : $client->peerUser(...),
			),
			chat_instance : -4703890299239188886,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -5761837496820376606,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(...),
				available_balance : $client->starsAmount(...),
				overall_revenue : $client->starsAmount(...),
				next_withdrawal_at : 26,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -6117955115783027037,
			payload : 'qfr91hR2CtV6dG3u',
			qts : 85,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(...),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(...),
				timeout : 19,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -8399172786258705703,
				access_hash : -8945997638147206386,
			),
			sub_chain_id : 74,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 93,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 3379160872697565072,
			saved_peer_id : $client->peerUser(
				user_id : -8777577335255052877,
			),
			read_max_id : 95,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 6781788134728468062,
			saved_peer_id : $client->peerUser(
				user_id : -9061824239511377616,
			),
			read_max_id : 14,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 8412427021204295240,
			saved_peer_id : $client->peerUser(
				user_id : -7410426550830248189,
			),
		),
		$client->updatePinnedForumTopic(
			pinned : 20,
			peer : $client->peerUser(
				user_id : 4910996206666986122,
			),
			topic_id : 38,
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 3914417106988613183,
				access_hash : -5701407079626132393,
			),
			from_id : $client->peerUser(
				user_id : 7015632653841732516,
			),
			random_id : 537983440059401811,
			message : $client->textWithEntities(
				text : 'ufGIks7SeCgWzcDq',
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
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 51919872477900735,
			text : 'b2gxkzoeXclHyiTm',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 5707134982210637382,
			payload : 'iO6wPGYJn840tFHk',
			until_date : 58,
			qts : 50,
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -7932031830061053582,
				access_hash : -908868562026295875,
			),
			from_id : $client->peerUser(
				user_id : -8012816162839108268,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 4445113771472163553,
			),
			order : array(88),
		),
	),
	users : array(
		$client->userEmpty(
			id : 4593686054253252435,
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
			id : 1308355243887075461,
			access_hash : -5481427860828880376,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2u6Y8iMD3kFOqElz',
					reason : 'mV7Iuxeqw4pWciFX',
					text : 'lvUDwaNRcgK3ZQ9M',
				),
			),
			bot_inline_placeholder : 'PiWK5LBVH6Iw0QlG',
			lang_code : 'zKed46uk9Q52HJp7',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 40,
			color : $client->peerColor(
				color : 37,
				background_emoji_id : 3637468645444367110,
			),
			profile_color : $client->peerColor(
				color : 88,
				background_emoji_id : -2715702819256224009,
			),
			bot_active_users : 54,
			bot_verification_icon : -7781347992128937703,
			send_paid_messages_stars : 389995123214124413,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4584777971131148538,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8278511768623511185,
			title : '9e3DGbMLTy47CO0o',
			photo : $client->chatPhotoEmpty(),
			participants_count : 45,
			date : 9,
			version : 27,
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
				until_date : 49,
			),
		),
		$client->chatForbidden(
			id : -1740940186329766247,
			title : 'i4BfAmlqzu56QnJY',
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
			id : -2611949457140950548,
			access_hash : 3742402591135812706,
			title : 'aH6ls0igNMWJV7PK',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 5,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UCmr47o360gLhWyj',
					reason : 'LcijTAWEs2rBv0ZN',
					text : 'WBtiEf9U76lFYNyZ',
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
				until_date : 2,
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
				until_date : 11,
			),
			participants_count : 39,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 43,
			color : $client->peerColor(
				color : 19,
				background_emoji_id : 2888553007700552076,
			),
			profile_color : $client->peerColor(
				color : 16,
				background_emoji_id : 7632607989922950515,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 61,
			subscription_until_date : 65,
			bot_verification_icon : 2979010916158639917,
			send_paid_messages_stars : -4341065775970642312,
			linked_monoforum_id : 2624565295096539638,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1472009998254283547,
			access_hash : 6010682802969582988,
			title : 'kOvxU7dfpo5zC4s9',
			until_date : 86,
		),
	),
	date : 49,
	seq : 86,
);
```