# updates

**Description** : *Full constructor of updates*

**Layer** : 227

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
				id : 59,
				peer_id : $client->peerUser(
					user_id : -5616789420099284686,
				),
			),
			pts : 43,
			pts_count : 39,
		),
		$client->updateMessageID(
			id : 21,
			random_id : 4355965708322793150,
		),
		$client->updateDeleteMessages(
			messages : array(25),
			pts : 89,
			pts_count : 36,
		),
		$client->updateUserTyping(
			user_id : -6689614179823242540,
			top_msg_id : 81,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -3085804495471305712,
			from_id : $client->peerUser(
				user_id : -316464779522428430,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -2819986638962272507,
				self_participant : $client->chatParticipant(
					user_id : 3444718320394519462,
					inviter_id : -4000770099523895354,
					date : 9,
					rank : 'vUXGn4sxgpc72mlB',
				),
			),
		),
		$client->updateUserStatus(
			user_id : -3065261046488516648,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 3006351187549960029,
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
			date : 56,
			device : 'V2a7BpZ0b1g3Nhzj',
			location : 'NX7QKjIRdC6nHrA8',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -1586221283508146853,
				chat_id : 67,
				date : 41,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 17,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 67,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 3,
			),
			date : 99,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 88,
			max_date : 55,
			date : 73,
		),
		$client->updateChatParticipantAdd(
			chat_id : -2663461291689483510,
			user_id : -3411435088634790769,
			inviter_id : -2053514114654520130,
			date : 1,
			version : 42,
		),
		$client->updateChatParticipantDelete(
			chat_id : 529746104274151471,
			user_id : 1427214027858002452,
			version : 61,
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
					id : 62,
					ip_address : '127.0.0.1',
					port : 63,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -9126920364256642450,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 15,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 32,
			type : 'UG6w3XKhdNZJH4yi',
			message : 'sl2IVWa3CEYNrjpv',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 30,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 4,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 35,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 20,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 45,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 6,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 59,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 61,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 29,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 6,
					language : 'NcC0YGwRuLZyT9xd',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 26,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 51,
					user_id : -2394269276345228649,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 81,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 99,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 47,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 41,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 14,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 40,
					document_id : 8689060037143843353,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 40,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 51,
					date : 72,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 41,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 5,
					old_text : 'VZKUp1W2ejculLAM',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 100,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-2660229014265381262),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(6334227453788531604),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-8543203319087643633),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-6993342828046422089),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -6292395750456135569,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 16,
			peer : $client->peerUser(
				user_id : -7484870986562421033,
			),
			top_msg_id : 77,
			max_id : 52,
			still_unread_count : 22,
			pts : 49,
			pts_count : 44,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 7954133783908739302,
			),
			max_id : 64,
			pts : 86,
			pts_count : 58,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -4841951507364754054,
				url : 'https://docs.liveproto.dev',
			),
			pts : 29,
			pts_count : 10,
		),
		$client->updateReadMessagesContents(
			messages : array(82),
			pts : 12,
			pts_count : 16,
			date : 26,
		),
		$client->updateChannelTooLong(
			channel_id : 2539672457009939637,
			pts : 91,
		),
		$client->updateChannel(
			channel_id : 5225337598250981786,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 38,
				peer_id : $client->peerUser(
					user_id : 1399835844268284918,
				),
			),
			pts : 73,
			pts_count : 92,
		),
		$client->updateReadChannelInbox(
			folder_id : 93,
			channel_id : -635197892512405243,
			max_id : 51,
			still_unread_count : 17,
			pts : 72,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 2053427627299801899,
			messages : array(64),
			pts : 76,
			pts_count : 62,
		),
		$client->updateChannelMessageViews(
			channel_id : -7235967663042462129,
			id : 75,
			views : 37,
		),
		$client->updateChatParticipantAdmin(
			chat_id : -6064334645037213725,
			user_id : 2720131654058224938,
			is_admin : false,
			version : 11,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 28,
					id : 5689147534253581696,
					access_hash : -1319059391348799640,
					title : 'EkxZNmjDpH7KQ3Tr',
					short_name : 'w7gBUk1lS04WyAH2',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 12,
					thumb_version : 63,
					thumb_document_id : -426150452367317543,
					count : 95,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'IOeU1PGBmfMLTEvd',
						documents : array(-2086847938244677711),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : 1946316660688701265,
						keyword : array('rYFfeQnP19Vt7NHa'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 2276698613955606662,
					),
					$client->document(
						id : 8106820065529454155,
						access_hash : 8936843609875865911,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 32,
						mime_type : '4gRXqJPMEsU7p9jC',
						size : 1351364059150326039,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 74,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(6585778412503078417),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -7748274515916551392,
			user_id : -4120107820101616960,
			query : '1LoYj57qaeW4A3Gw',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'tzDdJ1n5XibRFj7p',
		),
		$client->updateBotInlineSend(
			user_id : -317815225046272412,
			query : 'yH15wUaDsAnqIdYt',
			geo : $client->geoPointEmpty(),
			id : 'NeHzxBd4sLu2F6Qb',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 1,
				id : -51372730449104245,
				access_hash : 4386539655203914875,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 79,
				peer_id : $client->peerUser(
					user_id : 5270081569369080690,
				),
			),
			pts : 37,
			pts_count : 46,
		),
		$client->updateBotCallbackQuery(
			query_id : 5994359577943744021,
			user_id : 5267679628994330238,
			peer : $client->peerUser(
				user_id : 7999670902265367433,
			),
			msg_id : 70,
			chat_instance : 7649314307476010399,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'g065nN9wtPE1iQUb',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 6,
				peer_id : $client->peerUser(
					user_id : 255321758005772349,
				),
			),
			pts : 96,
			pts_count : 66,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -7982442185682455815,
			user_id : -8968263360634930704,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 90,
				id : 488333456460302688,
				access_hash : 6774297142238905291,
			),
			chat_instance : -1950895012787686421,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'pEYczkWoTs8ZKBxv',
		),
		$client->updateReadChannelOutbox(
			channel_id : -2940401967375965546,
			max_id : 88,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -1548359896512588561,
			),
			top_msg_id : 90,
			saved_peer_id : $client->peerUser(
				user_id : 937079222775942807,
			),
			draft : $client->draftMessageEmpty(
				date : 37,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 6341696756959665816,
			webpage : $client->webPageEmpty(
				id : -7664118860189388733,
				url : 'https://docs.liveproto.dev',
			),
			pts : 36,
			pts_count : 91,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 37,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -7323082591858432156,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 33,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -2832216840161453676,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 90,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'Y17pTlvRQ5XzrSk9',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 4997536526164572931,
			data : $client->dataJSON(
				data : 'XM9lPFdLNfin4IjK',
			),
			timeout : 9,
		),
		$client->updateBotShippingQuery(
			query_id : 3790925199343164682,
			user_id : 5904690564948860844,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'QfCbt09nS62WRr5H',
				street_line2 : '4zxZAMtyHrJ0Dl2h',
				city : 'mRQ1rjqFOSaDIhGv',
				state : 'y96RS0mgTnDEQdbX',
				country_iso2 : 'M4S0UzdPKQyJCbqx',
				post_code : 'IUhCH4Q68RZrjOpy',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 6387830383339201166,
			user_id : -949695327801877283,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'Gk2DloRtBZFC57I9',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'kNa0GqWHidoQcfbr',
					street_line2 : 'JqZultNOC8pT6zQc',
					city : 'qUei1v6SzBgjXFCI',
					state : 'CIYGoyrksvNgaAwX',
					country_iso2 : '8eJGHcVEitaZMz6T',
					post_code : 'ANqHe72QMr5gJG9w',
				),
			),
			shipping_option_id : '4u9gUjrmScMkBEJ6',
			currency : '1uy07r8x9FXilaqG',
			total_amount : 6200280265266633571,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -5500692644533427837,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'fHmdgXxQ2BYT976F',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'vpNV5Duiw67Q8hqk',
				from_version : 12,
				version : 27,
				strings : array(
					$client->langPackString(
						key : 'obTqCa1JnHy5hucg',
						value : 'oTcfFZyalWOGpvg0',
					),
					$client->langPackStringPluralized(
						key : '78za905UbnSIoXBd',
						zero_value : 'KAfkMrqHo8CyTJdx',
						one_value : 'ucARahEB7Of58oMX',
						two_value : 'UNcb2M8GTZhRdB1D',
						few_value : 'me6r89SLuDl7ozgH',
						many_value : '1KVf5ZyjEphRUxvt',
						other_value : 'vThxVNsjiHPafQ84',
					),
					$client->langPackStringDeleted(
						key : '7lD0IughmWOo5SM6',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 1066699910969096199,
			top_msg_id : 14,
			saved_peer_id : $client->peerUser(
				user_id : -8632016955841004849,
			),
			messages : array(58),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -1490121988924844690,
			available_min_id : 35,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -1355972043836607046,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 8948257145495809174,
			),
		),
		$client->updateMessagePoll(
			peer : $client->peerUser(
				user_id : 260641879446326895,
			),
			msg_id : 14,
			top_msg_id : 82,
			poll_id : -8423513221606129659,
			poll : $client->poll(
				id : 5531994952221090010,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				open_answers : true,
				revoting_disabled : true,
				shuffle_answers : true,
				hide_results_until_close : true,
				creator : true,
				subscribers_only : true,
				question : $client->textWithEntities(
					text : '2x30JmuYBRlntPiN',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						media : $client->messageMediaEmpty(...),
						added_by : $client->peerUser(...),
						date : 79,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 59,
				close_date : 98,
				countries_iso2 : array('2NMZLGSAq45QITHJ'),
				hash : 0,
			),
			results : $client->pollResults(
				min : true,
				has_unread_votes : true,
				can_view_stats : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 100,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 1,
				recent_voters : array(
					$client->peerUser(
						user_id : 8640921060950435092,
					),
					$client->peerChat(
						chat_id : -747090335759148279,
					),
					$client->peerChannel(
						channel_id : -1543511201457913985,
					),
				),
				solution : 'a0BlRQoMbPHqG45t',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 61,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 16,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 71,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 70,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 12,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 97,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 58,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 69,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 89,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 48,
						language : 'sqoJLrjbfCU8kxEZ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 39,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 55,
						user_id : 4694770586069011417,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 64,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 89,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 100,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 58,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 89,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 40,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 98,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 55,
						document_id : 5845950016621228557,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 72,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 94,
						date : 24,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 86,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 100,
						old_text : 'rUSTmzDYOnvwN3I8',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 34,
					),
				),
				solution_media : $client->messageMediaEmpty(),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 5658041711371718756,
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
				until_date : 41,
			),
			version : 10,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 6707091670541697563,
					),
					folder_id : 57,
				),
			),
			pts : 96,
			pts_count : 7,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 5135554338153337463,
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
				geo_distance : 21,
				request_chat_title : 'RFOhwKtAvoneG23Y',
				request_chat_date : 72,
				business_bot_id : -7019154282964170824,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 1771144940650688589,
				registration_month : 'RS68svQCOqdT47uw',
				phone_country : '+1234567890',
				name_change_date : 81,
				photo_change_date : 26,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -2887410715012602257,
					),
					expires : 19,
					distance : 24,
				),
				$client->peerSelfLocated(
					expires : 45,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 79,
				peer_id : $client->peerUser(
					user_id : 4239711726113914345,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 1484046308047271136,
			),
			messages : array(92),
			sent_messages : array(7),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 7587436268866886882,
				access_hash : 4120664766553118714,
				slug : '9X7CrfZRQJFk0sTd',
				title : 'F1jtDLGCxh0JaB54',
				document : $client->documentEmpty(
					id : -2596328219330965663,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 90,
						outbox_accent_color : 92,
						message_colors : array(50),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'ACdjnU0O3Hlviqka',
				installs_count : 30,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 877729739347075564,
			),
			msg_id : 8,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 6419475528243369860,
			peer : $client->peerUser(
				user_id : -946391800608162189,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			positions : array(98),
			qts : 36,
		),
		$client->updateDialogFilter(
			id : 66,
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
				id : 14,
				title : $client->textWithEntities(
					text : '31BA5ORKEVw8a7mP',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				emoticon : 'E1oLdei0k9p5nUfA',
				color : 45,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(90),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -5746507013691963127,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 908441468837568223,
			id : 82,
			forwards : 38,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -2031221946801532685,
			top_msg_id : 68,
			read_max_id : 36,
			broadcast_id : 8194464801821485489,
			broadcast_post : 17,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 4857836618840765608,
			top_msg_id : 85,
			read_max_id : 88,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 8488280385229113942,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 8368733966657360548,
			top_msg_id : 37,
			from_id : $client->peerUser(
				user_id : 4194192769372417267,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 7241718613080037500,
			),
			messages : array(18),
			pts : 68,
			pts_count : 52,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 8250482978658754067,
			messages : array(97),
			pts : 65,
			pts_count : 54,
		),
		$client->updateChat(
			chat_id : -8523132420393160050,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 7722872544352706996,
				access_hash : -2390070157318812196,
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
					peer : $client->peerUser(
						user_id : 7464729215190840563,
					),
					date : 100,
					active_date : 67,
					source : 38,
					volume : 92,
					about : 'RDrbjCocTyL5SdBi',
					raise_hand_rating : -5962007053472720295,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'bAf84Dp06yMqskev',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 88,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'XjJF3KkzyTYfOnrI',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 93,
					),
					paid_stars_total : 1570572754572219685,
				),
			),
			version : 16,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -1059224744510671028,
			),
			call : $client->groupCallDiscarded(
				id : 6502585869872332301,
				access_hash : -3251368500643912415,
				duration : 96,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 4197641660329093288,
			),
			ttl_period : 14,
		),
		$client->updateChatParticipant(
			chat_id : -5691829738595632028,
			date : 76,
			actor_id : 658765841329843854,
			user_id : -9200815082715150325,
			prev_participant : $client->chatParticipant(
				user_id : -9013758927867968657,
				inviter_id : -7440066270425053617,
				date : 70,
				rank : 'aV7IXW9UZuQ4HeBN',
			),
			new_participant : $client->chatParticipant(
				user_id : 3831633432836331781,
				inviter_id : 6955112379139059074,
				date : 25,
				rank : 'm6ijvtqYanrJDXzx',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '7Gcb49vIkHulAK2U',
				admin_id : -4819551666089396785,
				date : 38,
				start_date : 18,
				expire_date : 61,
				usage_limit : 29,
				usage : 66,
				requested : 13,
				subscription_expired : 40,
				title : 'RqnjCp32adxorJZz',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 30,
					amount : -6753803392951220470,
				),
			),
			qts : 69,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 4440643685804474184,
			date : 85,
			actor_id : -4049680509347338627,
			user_id : -2376948421834204712,
			prev_participant : $client->channelParticipant(
				user_id : -3118804126694897112,
				date : 86,
				subscription_until_date : 81,
				rank : 'CkruZjM78OmapDhX',
			),
			new_participant : $client->channelParticipant(
				user_id : -180530368078839303,
				date : 18,
				subscription_until_date : 85,
				rank : 'h0s6mHAPnNKofOlL',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '3XfbZQTP18EouvGy',
				admin_id : 4983630276708193560,
				date : 97,
				start_date : 12,
				expire_date : 52,
				usage_limit : 24,
				usage : 88,
				requested : 97,
				subscription_expired : 1,
				title : 'fNSiVwoAdgvu5XtK',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 60,
					amount : -4882407927400865152,
				),
			),
			qts : 58,
		),
		$client->updateBotStopped(
			user_id : -4217804870363816343,
			date : 41,
			stopped : false,
			qts : 84,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'h3n1Ma5wjYeBqftL',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 8148312444244456679,
			),
			bot_id : -6088123943462864132,
			commands : array(
				$client->botCommand(
					command : 'eE0RaFDlWhuC41Qg',
					description : 'WFhN6n3xYmvClkGr',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 3114017232254276239,
			),
			requests_pending : 8,
			recent_requesters : array(-5271254111583840330),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -2100736306546195918,
			),
			date : 24,
			user_id : 7621958240548431851,
			about : 'QSwIpVGgDZzNCxWt',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'uAq8U0TO6arXNJL9',
				admin_id : 4906046553026369728,
				date : 85,
				start_date : 36,
				expire_date : 84,
				usage_limit : 14,
				usage : 60,
				requested : 74,
				subscription_expired : 34,
				title : '4E9DBXdLZxTKhJWF',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 72,
					amount : 8521790790834774593,
				),
			),
			qts : 72,
			query_id : -3364230107964220320,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 9036238423830291875,
			),
			msg_id : 19,
			top_msg_id : 11,
			saved_peer_id : $client->peerUser(
				user_id : 8882494220124374319,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 79,
						reaction : $client->reactionEmpty(...),
						count : 75,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 52,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 37,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -5648555818955079955,
		),
		$client->updateBotMenuButton(
			bot_id : 2082854471960391450,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -5451573309925736548,
			),
			msg_id : 49,
			transcription_id : 7731985501015005702,
			text : 'PUBuDvT7SN096Gkl',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 4256859902260819483,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -4449864207312595843,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 9166132543359582398,
			),
			msg_id : 75,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 58,
					h : 3,
					thumb : $client->photoSizeEmpty(
						type : 'J2Lp79fGN6IVQR48',
					),
					video_duration : 21,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 2430432128504689642,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 5388260920437607881,
			),
			story : $client->storyItemDeleted(
				id : 72,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -3611308631952673242,
			),
			max_id : 99,
		),
		$client->updateStoryID(
			id : 82,
			random_id : 8480016170973681205,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 27,
				cooldown_until_date : 23,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 5712252071029866097,
			),
			story_id : 8,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 620361487403623495,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'boNRVsUzejWkg7G1',
				user_id : 5599891296217861042,
				giveaway_msg_id : 71,
				date : 83,
				expires : 61,
				used_gift_slug : '4x1MpJyH8Ir2YKej',
				multiplier : 95,
				stars : 6119900833611902168,
			),
			qts : 34,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 7275323662493682932,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : -6190448895999121911,
			),
			wallpaper : $client->wallPaper(
				id : -929302947712668819,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 5476102256124043366,
				slug : 'SDqepgc1QJjHXAYf',
				document : $client->documentEmpty(
					id : -6358149458154269555,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 34,
					second_background_color : 21,
					third_background_color : 49,
					fourth_background_color : 2,
					intensity : 3,
					rotation : 73,
					emoticon : 'GsxcnvRbFBE1gLpH',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 8166812048642394387,
			),
			msg_id : 5,
			date : 90,
			actor : $client->peerUser(
				user_id : 7812195645526669479,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '7zf6jyqTlEH14gGx',
				),
				$client->reactionCustomEmoji(
					document_id : 5737163587123377271,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'Aab51XTov8z4kmtc',
				),
				$client->reactionCustomEmoji(
					document_id : -3306306155646775843,
				),
				$client->reactionPaid(),
			),
			qts : 31,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -3720313630785263210,
			),
			msg_id : 57,
			date : 5,
			reactions : array(
				$client->reactionCount(
					chosen_order : 44,
					reaction : $client->reactionEmpty(),
					count : 29,
				),
			),
			qts : 98,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -1458651847464386828,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -4394408217603469403,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 30,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : '8irdAXFeYPsWlo5B',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 64,
					shortcut : '01vcb6sgIEFlMKeR',
					top_message : 6,
					count : 22,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 14,
				shortcut : 'yxGs6EfhK9daYloU',
				top_message : 27,
				count : 96,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 52,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 97,
				peer_id : $client->peerUser(
					user_id : -6549704942104954335,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 54,
			messages : array(12),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'rU5kIAlVaSd3TNHX',
				user_id : -7660856563863672627,
				dc_id : 79,
				date : 54,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 27,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'CgYrzcm68IBiE4fQ',
			message : $client->messageEmpty(
				id : 6,
				peer_id : $client->peerUser(
					user_id : -3032032997930267756,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 22,
				peer_id : $client->peerUser(
					user_id : 8075128640232157058,
				),
			),
			qts : 66,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : '0b8SjamnVhD2fXs7',
			message : $client->messageEmpty(
				id : 37,
				peer_id : $client->peerUser(
					user_id : 3365682384410253177,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 10,
				peer_id : $client->peerUser(
					user_id : -1196579525220901670,
				),
			),
			qts : 71,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'yQDrCWuTi80zxR5s',
			peer : $client->peerUser(
				user_id : -8133220286414940381,
			),
			messages : array(38),
			qts : 72,
		),
		$client->updateNewStoryReaction(
			story_id : 48,
			peer : $client->peerUser(
				user_id : -7565320965149718395,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -6691048824837498901,
				nanos : 65,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 4654594306274353851,
			user_id : -4414572130127856255,
			connection_id : 'qcux2g4ePnKvVrta',
			message : $client->messageEmpty(
				id : 43,
				peer_id : $client->peerUser(
					user_id : -46381753430945235,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 84,
				peer_id : $client->peerUser(
					user_id : -1855463502434952277,
				),
			),
			chat_instance : -6398757692005093902,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -4791441843610378829,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -7127353467414640444,
					nanos : 56,
				),
				available_balance : $client->starsAmount(
					amount : -5734585414702782373,
					nanos : 20,
				),
				overall_revenue : $client->starsAmount(
					amount : -1351435496222731188,
					nanos : 45,
				),
				next_withdrawal_at : 58,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 21562158985287707,
			payload : 'B0abcL59dTviXIng',
			qts : 78,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 50,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 13,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -8358962555116112879,
				access_hash : 9045715750043388065,
			),
			sub_chain_id : 72,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 89,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 7658353193413791445,
			saved_peer_id : $client->peerUser(
				user_id : 2323988343336896126,
			),
			read_max_id : 25,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -6544062931201655271,
			saved_peer_id : $client->peerUser(
				user_id : 6721383761366855102,
			),
			read_max_id : 27,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 6539354503885206368,
			saved_peer_id : $client->peerUser(
				user_id : 4239093947446061949,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -3962493332665816706,
				access_hash : 4617372458295276815,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 93,
				from_id : $client->peerUser(
					user_id : -7958007095648201190,
				),
				date : 16,
				message : $client->textWithEntities(
					text : 'mMDzjEpoJcvOHu9y',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				paid_message_stars : -8460520134276686077,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 8908482071548779740,
				access_hash : 7185070862063899407,
			),
			from_id : $client->peerUser(
				user_id : 5298965902523335296,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -6192111123364024828,
			),
			topic_id : 6,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 4471084804490319067,
			),
			order : array(85),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 870999544292027609,
				access_hash : 4698395099725221099,
			),
			messages : array(89),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -3069729594743610067,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : 1018279176419399161,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -3570279438839782586,
				bid_date : 84,
				min_bid_amount : 5319355677361912316,
				bid_peer : $client->peerUser(
					user_id : -601009238607025283,
				),
				acquired_count : 91,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
		$client->updateChatParticipantRank(
			chat_id : 7424375874419703340,
			user_id : -481796824662255414,
			rank : 'SjVQTZrt9GP4gol0',
			version : 84,
		),
		$client->updateManagedBot(
			user_id : -3760018221238330224,
			bot_id : 8304771746243378892,
			qts : 57,
		),
		$client->updateBotGuestChatQuery(
			query_id : -5590334801782201639,
			message : $client->messageEmpty(
				id : 80,
				peer_id : $client->peerUser(
					user_id : -4527877903524837785,
				),
			),
			reference_messages : array(
				$client->messageEmpty(
					id : 36,
					peer_id : $client->peerUser(
						user_id : 5205923091646104254,
					),
				),
				$client->message(
					out : true,
					mentioned : true,
					media_unread : true,
					silent : true,
					post : true,
					from_scheduled : true,
					legacy : true,
					edit_hide : true,
					pinned : true,
					noforwards : true,
					invert_media : true,
					offline : true,
					video_processing_pending : true,
					paid_suggested_post_stars : true,
					paid_suggested_post_ton : true,
					id : 2,
					from_id : $client->peerUser(
						user_id : -1949169248927690079,
					),
					from_boosts_applied : 72,
					from_rank : 'ksvZAFobwxHKVP7L',
					peer_id : $client->peerUser(
						user_id : -396923901694687566,
					),
					saved_peer_id : $client->peerUser(
						user_id : 2040158875741732159,
					),
					fwd_from : $client->messageFwdHeader(
						imported : true,
						saved_out : true,
						from_id : $client->peerUser(...),
						from_name : '96kDtglzwKs71UcR',
						date : 39,
						channel_post : 85,
						post_author : 'DavBzXnd1hJZNACH',
						saved_from_peer : $client->peerUser(...),
						saved_from_msg_id : 26,
						saved_from_id : $client->peerUser(...),
						saved_from_name : 'uVBQNF6sDZpKhtnO',
						saved_date : 97,
						psa_type : 'P9QfXjuyisLtASWH',
					),
					via_bot_id : -8905830531429120496,
					via_business_bot_id : 3111463246278676443,
					guestchat_via_from : $client->peerUser(
						user_id : -887392670645915659,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_ephemeral : true,
						reply_to_msg_id : 20,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 46,
						quote_text : 'dEkgR8fZUGnsbvOF',
						quote_entities : array(
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
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 2,
						todo_item_id : 99,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 71,
					message : '3Iw2mLJVYEznCbMs',
					media : $client->messageMediaEmpty(),
					reply_markup : $client->replyKeyboardHide(
						selective : true,
					),
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 1,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 73,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 47,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 50,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 69,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 74,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 27,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 8,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 74,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 29,
							language : 'Yt0pnNRS6iP5sCJr',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 5,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 17,
							user_id : -6181443205470408099,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 46,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 67,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 30,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 30,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 6,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 65,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 77,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 75,
							document_id : 1780488876238362512,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 40,
						),
						$client->messageEntityFormattedDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							offset : 0,
							length : 20,
							date : 46,
						),
						$client->messageEntityDiffInsert(
							offset : 0,
							length : 27,
						),
						$client->messageEntityDiffReplace(
							offset : 0,
							length : 55,
							old_text : 'bBVZX4fPRDGETloq',
						),
						$client->messageEntityDiffDelete(
							offset : 0,
							length : 7,
						),
					),
					views : 6,
					forwards : 7,
					replies : $client->messageReplies(
						comments : true,
						replies : 9,
						replies_pts : 9,
						recent_repliers : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
						channel_id : -548114707158169491,
						max_id : 32,
						read_max_id : 32,
					),
					edit_date : 0,
					post_author : 'RsEJPVM5CehY8ZS3',
					grouped_id : -8064203299590380167,
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
					restriction_reason : array(
						$client->restrictionReason(
							platform : 'Ol0bDdxkijoU1SYV',
							reason : '34jquTZCXUoA6OB1',
							text : '80oAIwpiZbaYchCe',
						),
					),
					ttl_period : 82,
					quick_reply_shortcut_id : 44,
					effect : 3375656759584348030,
					factcheck : $client->factCheck(
						need_check : true,
						country : 'HQut6Csz7kS9mdVg',
						text : $client->textWithEntities(...),
						hash : 0,
					),
					report_delivery_until_date : 55,
					paid_message_stars : -7659890932704070196,
					suggested_post : $client->suggestedPost(
						accepted : true,
						rejected : true,
						price : $client->starsAmount(...),
						schedule_date : 58,
					),
					schedule_repeat_period : 34,
					summary_from_language : 'y8vfhcwL1TiEQnHq',
					rich_message : $client->richMessage(
						rtl : true,
						part : true,
						blocks : array(
							$client->pageBlockUnsupported(...),
							$client->pageBlockTitle(...),
							$client->pageBlockSubtitle(...),
							$client->pageBlockAuthorDate(...),
							$client->pageBlockHeader(...),
							$client->pageBlockSubheader(...),
							$client->pageBlockParagraph(...),
							$client->pageBlockPreformatted(...),
							$client->pageBlockFooter(...),
							$client->pageBlockDivider(...),
							$client->pageBlockAnchor(...),
							$client->pageBlockList(...),
							$client->pageBlockBlockquote(...),
							$client->pageBlockPullquote(...),
							$client->pageBlockPhoto(...),
							$client->pageBlockVideo(...),
							$client->pageBlockCover(...),
							$client->pageBlockEmbed(...),
							$client->pageBlockEmbedPost(...),
							$client->pageBlockCollage(...),
							$client->pageBlockSlideshow(...),
							$client->pageBlockChannel(...),
							$client->pageBlockAudio(...),
							$client->pageBlockKicker(...),
							$client->pageBlockTable(...),
							$client->pageBlockOrderedList(...),
							$client->pageBlockDetails(...),
							$client->pageBlockRelatedArticles(...),
							$client->pageBlockMap(...),
							$client->pageBlockHeading1(...),
							$client->pageBlockHeading2(...),
							$client->pageBlockHeading3(...),
							$client->pageBlockHeading4(...),
							$client->pageBlockHeading5(...),
							$client->pageBlockHeading6(...),
							$client->pageBlockMath(...),
							$client->pageBlockThinking(...),
							$client->inputPageBlockMap(...),
							$client->pageBlockBlockquoteBlocks(...),
						),
						photos : array(
							$client->photoEmpty(...),
							$client->photo(...),
						),
						documents : array(
							$client->documentEmpty(...),
							$client->document(...),
						),
					),
				),
				$client->messageService(
					out : true,
					mentioned : true,
					media_unread : true,
					reactions_are_possible : true,
					silent : true,
					post : true,
					legacy : true,
					id : 33,
					from_id : $client->peerUser(
						user_id : 6638976457511673910,
					),
					peer_id : $client->peerUser(
						user_id : -7865728762843800599,
					),
					saved_peer_id : $client->peerUser(
						user_id : 8902910235075735291,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_ephemeral : true,
						reply_to_msg_id : 34,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 22,
						quote_text : 'MwI837vuxpeBl0TY',
						quote_entities : array(
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
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 30,
						todo_item_id : 72,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 44,
					action : $client->messageActionEmpty(),
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
					ttl_period : 73,
				),
			),
			qts : 57,
		),
		$client->updateAiComposeTones(),
		$client->updateJoinChatWebViewDecision(
			peer : $client->peerUser(
				user_id : -996838967745244246,
			),
			query_id : -3223180701889430198,
			result : $client->joinChatBotResultApproved(),
		),
		$client->updateNewBotConnection(
			confirmed : true,
			bot_id : 2679653608950380539,
			date : 51,
			device : 'n2q1iwc5DGxVsIe0',
			location : '5H8oUOZdwnPIemAl',
		),
		$client->updateWebBrowserSettings(
			open_external_browser : true,
			display_close_button : true,
		),
		$client->updateWebBrowserException(
			delete : true,
			open_external_browser : true,
			exception : $client->webDomainException(
				domain : 'WO1LSonQDbR7VXam',
				url : 'https://docs.liveproto.dev',
				title : 'dK4FGJPhV8Alj1YL',
				favicon : 3018034141230451141,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -328483776606990422,
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
			id : -4963162492339140544,
			access_hash : -362771738949503272,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'OdjVnMR13vYbUaNo',
					reason : '2d0lRU6rE8v9uye4',
					text : 'AgHy8CfIKZd3Rze4',
				),
			),
			bot_inline_placeholder : '9AEZ7G1DylBNU83o',
			lang_code : 'gSBV5AcMa73erUuq',
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
				max_id : 83,
			),
			color : $client->peerColor(
				color : 12,
				background_emoji_id : -519691773019670857,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : -3608650283794277218,
			),
			bot_active_users : 77,
			bot_verification_icon : 3917805332518886768,
			send_paid_messages_stars : 147236977259976391,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -4591697022388493332,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 728357546907897598,
			title : 'VE8HSTDsqdtBAei7',
			photo : $client->chatPhotoEmpty(),
			participants_count : 77,
			date : 8,
			version : 67,
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
			id : -6557089000058649474,
			title : 'VakKw8AoQvS1ftmc',
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
			id : -8476184507499050612,
			access_hash : -8699074981508763850,
			title : 'L4VO3lbopSgGs7tM',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mnMsZW5dgE9GUhYp',
					reason : 'YuHTaGEvMlsJtSKF',
					text : '4jUWqkyAwgOVlD96',
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
				until_date : 57,
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
				until_date : 8,
			),
			participants_count : 5,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 37,
			),
			color : $client->peerColor(
				color : 91,
				background_emoji_id : -295523001011055731,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : -8695584238495301389,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 24,
			subscription_until_date : 58,
			bot_verification_icon : -4291213594441871438,
			send_paid_messages_stars : -1220537227809141591,
			linked_monoforum_id : -594719123782015109,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 2465282936737787459,
			access_hash : -3776006081903340016,
			title : 'jBk94AULuMoKJ6gE',
			until_date : 37,
		),
	),
	date : 58,
	seq : 11,
);
```